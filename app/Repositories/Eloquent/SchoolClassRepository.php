<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\SchoolClassRepositoryInterface;
use App\Models\SchoolClass;

class SchoolClassRepository extends AbstractRepository implements SchoolClassRepositoryInterface
{
    protected $model = SchoolClass::class;
}