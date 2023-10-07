<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->firstName,
            'surname' => fake()->lastName,
        ];
    }
}
