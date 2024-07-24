<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->jobTitle,
            'employer_id'=>Employer::factory(),
            'salary'=>fake()->randomElement(['50000','60000','70000']),
            'location'=>'remote',
            'schedule'=>'full shift',
            'url'=>fake()->url,
            'featured'=>false,

        ];
    }
}
