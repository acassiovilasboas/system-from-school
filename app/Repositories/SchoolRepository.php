<?php

namespace App\Repositories;

use App\Models\School;

class SchoolRepository 
{
    protected $school;

    public function __construct(School $school)
    {
        $this->school = $school;
    }

    public function save($data)
    {
        $school = new $this->school;

        $school::create($data);

        return $school->refresh();
    }
}