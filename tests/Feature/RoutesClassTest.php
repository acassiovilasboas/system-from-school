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
        $response = $this->get('/class/show/1');

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
        $response = $this->get('/class/edit/1');

        $response->assertStatus(200);
    }


    /**
     * Test has page class delete.
     * @test
     * @return void
     */
    public function hasClassDelete()
    {
        $response = $this->get('/class/delete/1');

        $response->assertStatus(200);
    }


     /**
     * Test interact whie header in route store.
     * @test
     * @return void
     */
    // public function hasInteractWhitHeaderFromStore()
    // {
    //     $form = [
    //         'school_id' => 5,
    //         'year' => '2021',
    //         'level_education' => 'medio',
    //         'rotation' => 'matutino'
    //     ];
    //     $response = $this->withHeaders([
    //         'X-Header' => 'Value',
    //     ])->post('/class/create', $form);

    //     $response->assertStatus(201);
    // }
}
