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


    public function getAll()
    {
        return $this->school->all();
    }

    public function save($data)
    {
        $school = new $this->school;

        $school::create($data);

        return $school->refresh();
    }

    public function getById($id)
    {
        return $this->school->find($id);
    }

    public function update($data, $id)
    {
        $school = new $this->school;

        $school::where('id', $id)->update($data);

        return $school->refresh();
    }


    public function destroy($id)
    {
        return $this->school->destroy($id);
    }
}