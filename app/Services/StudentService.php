<?php

namespace App\Services;

use App\Http\Requests\StoreStudentRequest;
use App\Interfaces\ClassStudentRepositoryInterface;
use App\Interfaces\SchoolClassRepositoryInterface;
use App\Interfaces\SchoolRepositoryInterface;
use App\Interfaces\StudentRepositoryInterface;
use Carbon\Carbon;
use DateTime;

class StudentService
{
    protected $studentRepositoryInterface;
    protected $schoolClassRepositoryInterface;
    protected $lassStudentRepositoryInterface;
    protected $schoolRepositoryInterface;

    public function __construct(
        StudentRepositoryInterface $studentRepositoryInterface,
        SchoolClassRepositoryInterface $schoolClassRepositoryInterface,
        ClassStudentRepositoryInterface $classStudentRepositoryInterface,
        SchoolRepositoryInterface $schoolRepositoryInterface
        )
    {
        $this->studentRepositoryInterface = $studentRepositoryInterface;
        $this->schoolClassRepositoryInterface = $schoolClassRepositoryInterface;
        $this->classStudentRepositoryInterface = $classStudentRepositoryInterface;
        $this->schoolRepositoryInterface = $schoolRepositoryInterface;
    
    }

    public function getAll()
    {
        $data = $this->studentRepositoryInterface->getAll();
    
        $data->each(function ($item){
            $item->age = $this->calculateAge($item->birth_date);
            $schoolName = $item->school()->get()->first();
            $item->school = $schoolName->name ?? '-';
        });
        return $data;
    }

    public function getSchools()
    {
        return $this->schoolRepositoryInterface->getForSelect();
    }

    public function getById($id)
    {
        $data = $this->studentRepositoryInterface->getById($id);
        $data->age = $this->calculateAge($data->birth_date);
        $data->schools = $this->schoolRepositoryInterface->getForSelect();
        return $data;
    }

    private function calculateAge($birthDate)
    {
        $objBirthDate = new DateTime(date('Y-m-d', strtotime($birthDate)));
        $objToday = new DateTime(date('Y-m-d'));

        return $objBirthDate->diff($objToday)->format('%y');
    }

    public function save(StoreStudentRequest $request)
    {
        $data = $request->only([
            'name',
            'telphone',
            'email',
            'year',
            'birth_date',
            'genre',
            'school_class'
        ]);
        $data['birth_date'] = str_replace('/', '-', $data['birth_date']);
        $data['birth_date'] = date('Y-m-d', strtotime($data['birth_date']));
        return $this->studentRepositoryInterface->save($data);
    }
}