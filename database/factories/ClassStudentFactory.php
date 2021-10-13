<?php

namespace Database\Factories;

use App\Models\ClassStudent;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Repositories\Eloquent\SchoolClassRepository;
use App\Repositories\Eloquent\StudentRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassStudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassStudent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $class = SchoolClass::count();
        $class_id = rand(1, $class);
        $student = Student::count();
        $student_id = rand(1, $student);
        
        return [
            'class_id' => $class_id,
            'student_id' => $student_id
        ];
    }
}
