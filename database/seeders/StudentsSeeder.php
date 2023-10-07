<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    function run(): void
    {
        Student::factory(rand(5, 15))->create();
    }
}
