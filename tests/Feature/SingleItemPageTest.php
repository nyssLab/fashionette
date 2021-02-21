<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SingleItemPageTest extends TestCase {

    public function test_single_item_page_works() {
        $id = random_int(1, 1000);
        $response = $this->get('/api/shows/' . $id);
        $response->assertStatus(200);
    }


    public function test_search_results_not_null() {
        $id = random_int(1, 1000);
        $response = $this->get('/api/shows/' . $id);
        $response->assertOk()
            ->assertJsonStructure([
                'id', 'name', 'url', 'language', 'genres'
            ]);
    }
}
