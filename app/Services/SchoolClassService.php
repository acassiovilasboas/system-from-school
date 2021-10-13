<?php

namespace App\Services;

use App\Interfaces\SchoolClassRepositoryInterface;

class SchoolClassService
{
    protected $schoolClassRepositoryInterface;

    public function __construct(SchoolClassRepositoryInterface $schoolClassRepositoryInterface )
    {
        $this->schoolClassRepositoryInterface = $schoolClassRepositoryInterface;
    }

}