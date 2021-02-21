<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TvShowRepositoryInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class TvShowRepository implements TvShowRepositoryInterface {

    private int $ttl = 60; // cache time in seconds;
    protected int $tvMazeItemsPerPage = 250;
    protected int $itemsPerPage;

    protected Client $client;

    public function __construct(Client $client) {
        $this->client = $client;
        $this->itemsPerPage = 16;
    }

    /**
     * Cache all requests before executing them
     *
     * @param $apiRequest
     * @param $name
     * @return array|string
     */
    public function mazeRequest($apiRequest, $name) {
        return Cache::remember($name, $this->ttl, function () use ($apiRequest, $name) {
            return $apiRequest;
        });
    }

    /**
     * Load exactly {$itemsPerPage} TV Shows
     *
     * @param int $lastShowId
     * @return \Illuminate\Support\Collection
     */
    public function loadShows(int $lastShowId) {
        $tvShows = $this->loadMore($lastShowId)
            ->where('id', '>', $lastShowId)
            ->values();

        $count = $tvShows->count();
        while($count < $this->itemsPerPage) { // if final result count < desired items per page then:
            $tvShows = $tvShows->concat( // we load more results and concatenate them with old ones
                $this->loadMore($lastShowId + $count + 1)
            );
            $count = $tvShows->count();
        }
        return $tvShows->slice(0, $this->itemsPerPage);
    }

    /**
     * Load a whole page from TVMaze API
     *
     * @param int $lastShowId
     * @return \Illuminate\Support\Collection
     */
    private function loadMore(int $lastShowId) {
        $pageNumber = intval($lastShowId / $this->tvMazeItemsPerPage);
        return collect(
            $this->response_handler($this->endpointRequest('shows?page=' . $pageNumber))
        );
    }

    public function findById($id) {
        return $this->endpointRequest('shows/' . $id);
    }

    public function search($keyWord) {
        return collect(
            $this->response_handler($this->endpointRequest('search/shows?q=' . $keyWord))
        );
    }

    /**
     * Get Request's content
     *
     * @param $url
     * @return array|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function endpointRequest($url) {
        try {
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            return [];
        }

        return $response->getBody()->getContents();
    }

    /**
     * Decode Json for a Json response
     *
     * @param $response
     * @return array|mixed
     */
    private function response_handler($response) {
        if ($response) {
            return json_decode($response);
        }

        return [];
    }
}
