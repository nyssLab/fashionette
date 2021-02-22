<?php

namespace App\Http\Controllers;

use App\Models\TvShow;
use App\Repositories\TvShowRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * @group TvShows management
 *
 * APIs for managing TvShows
 */
class TvShowController extends Controller
{

    protected TvShow $tvShow;
    protected TvShowRepository $tvShowRepository;

    public function __construct(TvShow $tvShow, TvShowRepository $tvShowRepository)
    {
        $this->tvShow = $tvShow;
        $this->tvShowRepository = $tvShowRepository;
    }

    /**
     * List all available TV Shows
     *
     * @header X-Api-Version v1
     * @queryParam lastId Field. Example: 10
     * @param Request $request
     * @return array|string
     */
    public function index(Request $request)
    {
        return $this->tvShowRepository->loadShows($request->lastId);
    }

    /**
     * Show a specific TV Show by ID
     *
     * @header X-Api-Version v1
     * @urlParam id integer required The ID of the TvShow.
     * @param $id
     * @return array|string
     */
    public function show($id)
    {
        return $this->tvShowRepository->mazeRequest(
            $this->tvShowRepository->findById($id),
            "shows.{$id}"
        );
    }

    /**
     * Search for a TV Show
     *
     * @header X-Api-Version v1
     * @queryParam q Field. Example: deadwood
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        return $this->_filterSearch(
            $this->tvShowRepository->search($request->q),
            $request->q
        );
    }

    /**
     * filter the API result values to be non-case sensitive and non-typo tolerant
     *
     * @param $searchResult
     * @param $keyWord
     * @return mixed
     */
    private function _filterSearch(Collection $searchResult, $keyWord)
    {
        return $searchResult
            ->filter(
                function ($item) use ($keyWord) {
                    return stripos($item->show->name, $keyWord) !== false;
                }
            )->map(
                function ($item) {
                    return $item->show;
                }
            );
    }
}
