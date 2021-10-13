<?php

namespace App\Repositories;

namespace App\Repositories\Eloquent;

use App\Interfaces\ClassStudentRepositoryInterface;
use App\Models\ClassStudent;

class ClassStudentRepository extends AbstractRepository implements ClassStudentRepositoryInterface
{
    protected $model = ClassStudent::class;
}