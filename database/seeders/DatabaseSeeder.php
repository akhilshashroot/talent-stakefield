<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $availability = $faker->randomElement(['full-time', 'part-time']);
    	foreach (range(1,100) as $index) {
            DB::table('stakefield_users')->insert([
                'name' => $faker->name($availability),
                'email' => $faker->email,
                'employee_id' => $faker->Uuid,
                'skill_set' => $faker->phoneNumber,
                'experience' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'turnaround_time' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'availability' => $availability,
                'rate' => $faker->date($format = 'Y-m-d', $max = 'now'),


            ]);
        }
    }
}
