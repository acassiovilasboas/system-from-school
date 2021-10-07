<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesStudentTest extends TestCase
{
    /**
     * Test has page student index.
     * @test
     * @return void
     */
    public function hasStudentIndex()
    {
        $response = $this->get('/student');

        $response->assertStatus(200);
    }

    /**
     * Test has page student show.
     * @test
     * @return void
     */
    public function hasStudentShow()
    {
        $response = $this->get('/student/show/test');

        $response->assertStatus(200);
    }


    /**
     * Test has page student create.
     * @test
     * @return void
     */
    public function hasStudentNew()
    {
        $response = $this->get('/student/new');

        $response->assertStatus(200);
    }


    /**
     * Test has page student edit.
     * @test
     * @return void
     */
    public function hasStudentEdit()
    {
        $response = $this->get('/student/edit/dd');

        $response->assertStatus(200);
    }


    /**
     * Test has page student delete.
     * @test
     * @return void
     */
    public function hasStudentDelete()
    {
        $response = $this->get('/student/delete/dd');

        $response->assertStatus(200);
    }
}
