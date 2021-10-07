<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesHomeTest extends TestCase
{
    /**
     * Test has page home.
     * @test
     * @return void
     */
    public function hasHomeRoute()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
