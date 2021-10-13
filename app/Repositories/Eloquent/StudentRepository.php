<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\StoreSchoolRequest;
use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\DB;

class StudentRepository extends AbstractRepository implements StudentRepositoryInterface
{
    protected $model = Student::class;

    public function getAll($orderBy = null)
    {
        return $this->model->with('class', 'school')->paginate(10);
    }

    public function getById($id)
    {
        return $this->model->with('class')->findOrFail($id);
    }

    public function save($data)
    {   
        DB::beginTransaction();
        try {
            $student = $this->model->create($data);
            $student->class()->attach($data['school_class']);
            DB::commit();
            return $student->refresh();
        } catch (Exception $e) {
            throw new Exception("Erro inesperado!");
            DB::rollBack();
        }
    }
}
