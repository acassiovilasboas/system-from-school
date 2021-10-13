<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\SchoolRepositoryInterface;
use App\Models\School;

class SchoolRepository extends AbstractRepository implements SchoolRepositoryInterface
{
    protected $model = School::class;

    public function getForSelect()
    {
        return $this->model->get(['id', 'name']);
    }

    public function getClasses($id)
    {
        return $this->model->with('schoolClasses')->find($id);
    }
}