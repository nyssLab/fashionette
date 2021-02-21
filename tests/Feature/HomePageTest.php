<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{

    public function test_home_page_works()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_json_home_page()
    {
        $response = $this->get('/api/shows?lastId=0');
        $response->assertOk();
    }

    public function test_json_home_page_scroll_results_correct()
    {
        $lastId = 10;
        $response = $this->get("/api/shows?lastId=$lastId");
        $response->assertOk()
            ->assertJsonFragment(['id' => $lastId + 1]);
    }

    public function test_items_number_per_page()
    {
        $shouldBeNumber = setting('site.items_per_page');
        $response = $this->get("/api/shows?lastId=10");
        $response->assertOk()
            ->assertJsonCount($shouldBeNumber);
    }

    public function test_json_structure()
    {
        $response = $this->get("/api/shows?lastId=10");
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
