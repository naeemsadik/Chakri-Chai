<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobListing; // ✅ Import the Eloquent model

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobListing::factory()->count(50)->create();
    }
}
