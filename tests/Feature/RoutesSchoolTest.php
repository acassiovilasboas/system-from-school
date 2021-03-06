<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesSchoolTest extends TestCase
{
    /**
     * Test has page school index.
     * @test
     * @return void
     */
    public function hasSchoolIndex()
    {
        $response = $this->get('/school');

        $response->assertStatus(200);
    }


    /**
     * Test has page school show.
     * @test
     * @return void
     */
    public function hasSchoolShow()
    {
        $response = $this->get('/school/show/4');

        $response->assertStatus(302);
    }


    /**
     * Test has page school create.
     * @test
     * @return void
     */
    public function hasSchoolNew()
    {
        $response = $this->get('/school/new');

        $response->assertStatus(200);
    }


    /**
     * Test has page school edit.
     * @test
     * @return void
     */
    public function hasSchoolEdit()
    {
        $response = $this->get('/school/edit/4');

        // redirect
        $response->assertStatus(302);
    }


    /**
     * Test has page school delete.
     * @test
     * @return void
     */
    public function hasSchoolDelete()
    {
        $response = $this->delete('/school/delete/4');

        // redirect
        $response->assertStatus(302);
    }
}
