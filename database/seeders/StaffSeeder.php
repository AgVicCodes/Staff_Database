<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("staff")->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'secondary_email' => Str::random(10),
            'status' => "Active",
            'level' => "Level 5",
            'role' => Str::random(10),
            'phone' => Str::random(10),
            'social_media' => Str::random(10),
            'home_address' => Str::random(10),
            'wage' => 70000,
            'field' => "Technology",
            'leave_days' => 21,
            'hire_date' => date('d-m-y'),
            'date_of_birth' => date('d-m-y'),
        ]);
    }
}
