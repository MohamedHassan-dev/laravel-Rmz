<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class routeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route()
    {
        $response = $this->get('/category/create');

        $response->assertRedirect('/login');
    }
}
