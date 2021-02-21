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
    public function mazeRequest($apiRequest, $name);

    /**
     * Load exactly {$itemsPerPage} TV Shows
     *
     * @param int $lastShowId
     * @return \Illuminate\Support\Collection
     */
    public function loadShows(int $lastShowId);
}
