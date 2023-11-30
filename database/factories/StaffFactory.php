<?php

namespace Database\Factories;

use App\Models\Staff;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {
        // return [
            
        Staff::factory()
                ->count(28)
                ->create();
            
        // ];
    }
}
