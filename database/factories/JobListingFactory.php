<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job_Listing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTypes = ['Full-time', 'Part-time', 'Contract', 'Internship'];
        $salaries = [
            '$40,000 - $60,000', '$60,000 - $80,000', '$80,000 - $100,000', '$100,000 - $120,000',
            '$40/hr', '$50/hr', '$60/hr', '$70/hr', '$30/hr', '$100,000+'
        ];

        return [
            'title' => $this->faker->jobTitle,
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'company' => $this->faker->company,
            'location' => $this->faker->city . ', ' . $this->faker->stateAbbr,
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Internship']),
            'salary' => $this->faker->randomElement([
                '$40,000 - $60,000', '$60,000 - $80,000', '$80,000 - $100,000', '$100,000 - $120,000',
                '$40/hr', '$50/hr', '$60/hr', '$70/hr', '$30/hr', '$100,000+'
            ]),
            'employer_id' => Employer::factory(), // 👈 this creates an employer if one doesn't exist
        ];
    }
}