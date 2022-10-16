<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->dateTimeBetween($startDate = '-60 years', $endDate = '-18 years'),
            'company_name' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
