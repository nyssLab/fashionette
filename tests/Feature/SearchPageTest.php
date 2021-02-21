<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchPageTest extends TestCase
{

    public function test_search_page_works()
    {
        $response = $this->get('/api/shows/search?q=dead');
        $response->assertStatus(200);
    }


    public function test_search_results_not_null()
    {
        $response = $this->get('/api/shows/search?q=dead');
        $response->assertOk()
            ->assertJsonStructure(
                [
                    [
                        'id',
                        'name',
                        'url',
                        'language',
                        'genres'
                    ]
                ]
            );
    }
}
