<?php

namespace Database\Seeders;

use App\Models\ClassStudent;
use Illuminate\Database\Seeder;

class ClassStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassStudent::factory()
        ->count(10)
        ->create();
    }
}
