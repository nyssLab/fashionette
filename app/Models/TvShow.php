<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class TvShow extends Model {

    protected Client $client;

    public function __construct(Client $client) {
        parent::__construct();
        $this->client = $client;
    }

    public function loadAll() {
        return $this->response_handler($this->endpointRequest('shows?page=0'));
    }

    public function findById($id) {
        return $this->endpointRequest('shows/' . $id);
    }

    public function search($keyWord) {
        return $this->response_handler($this->endpointRequest('search/shows?q=' . $keyWord));
    }

    public function endpointRequest($url) {
        try {
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            return [];
        }

        return $response->getBody()->getContents();
    }

    public function response_handler($response) {
        if ($response) {
            return json_decode($response);
        }

        return [];
    }
}
