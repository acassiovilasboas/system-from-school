<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use App\Repositories\Eloquent\SchoolClassRepository;
use App\Repositories\Eloquent\SchoolRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $schoolClassRepository = new SchoolRepository();
        $indice = rand(0, 2);
        $class = $schoolClassRepository->getAll()->count();
        $class_id = rand(1, $class);
        return [
            'year' => $this->faker->date('Y-m-d'),
            'level_education' => 'fundamental' ? $indice == 0 : 'medio',
            'school_year' => $this->faker->date('Y-m-d'),
            'rotation' => 'matutino' ? $indice == 0 : ('vespertino' ? $indice == 1 : 'noturno'),
            'school_id' => $class_id
        ];
    }
}
