<?php

namespace App\Repositories\Interfaces;

interface TvShowRepositoryInterface
{
    /**
     * Cache all requests before trying executing them
     *
     * @param $apiRequest
     * @param $name
     * @return array|string
     */
    public function mazeRequest($apiRequest, string $name);

    /**
     * Load exactly {$itemsPerPage} TV Shows
     *
     * @param int $lastShowId
     * @return \Illuminate\Support\Collection
     */
    public function loadShows(int $lastShowId);

    /**
     * Show a specific item
     *
     * @param $id
     * @return array|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function findById(int $id);

    /**
     * Search for items matching a specific search query
     *
     * @param $keyWord
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(string $keyWord);
}
