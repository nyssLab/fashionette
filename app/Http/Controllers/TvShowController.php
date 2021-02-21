<?php

namespace App\Http\Controllers;

use App\Models\TvShow;
use App\Repositories\TvShowRepository;
use Illuminate\Http\Request;

class TvShowController extends Controller {

    protected TvShow $tvShow;
    protected TvShowRepository $tvShowRepository;

    public function __construct(TvShow $tvShow, TvShowRepository $tvShowRepository) {
        $this->tvShow = $tvShow;
        $this->tvShowRepository = $tvShowRepository;
    }

    /**
     * List all available TV Shows
     *
     * @param Request $request
     * @return array|string
     */
    public function index(Request $request) {
        return $this->tvShowRepository->loadShows($request->lastId);
    }

    /**
     * Show a specific TV Show by ID
     *
     * @param $id
     * @return array|string
     */
    public function show($id) {
        return $this->tvShowRepository->mazeRequest(
            $this->tvShow->findById($id),
            "shows.{$id}"
        );
    }

    /**
     * Search for a TV Show
     *
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request) {
        return $this->_filterSearch($this->tvShow->search($request->q), $request->q);
    }

    /**
     * filter the API result values to be non-case sensitive and non-typo tolerant
     *
     * @param $searchResult
     * @param $keyWord
     * @return mixed
     */
    private function _filterSearch($searchResult, $keyWord) {
        return array_map(
            function ($item) {
                return $item->show;
            },
            array_filter($searchResult, function ($item) use ($keyWord) {
                return stripos($item->show->name, $keyWord) !== false;
            })
        );
    }
}
