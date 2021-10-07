<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesClassTest extends TestCase
{
    /**
     * Test has page class index.
     * @test
     * @return void
     */
    public function hasClassIndex()
    {
        $response = $this->get('/class');

        $response->assertStatus(200);
    }


    /**
     * Test has page class show.
     * @test
     * @return void
     */
    public function hasClassShow()
    {
        $response = $this->get('/class/show/test');

        $response->assertStatus(200);
    }


    /**
     * Test has page class create.
     * @test
     * @return void
     */
    public function hasClassNew()
    {
        $response = $this->get('/class/new');

        $response->assertStatus(200);
    }


    /**
     * Test has page class edit.
     * @test
     * @return void
     */
    public function hasClassEdit()
    {
        $response = $this->get('/class/edit/dd');

        $response->assertStatus(200);
    }


    /**
     * Test has page class delete.
     * @test
     * @return void
     */
    public function hasClassDelete()
    {
        $response = $this->get('/class/delete/dd');

        $response->assertStatus(200);
    }
}
