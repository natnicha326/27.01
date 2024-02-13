<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MjuStudent;
use Faker\Factory as Faker;
class MjuStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            MjuStudent::create([
                'student_code' => $faker->unique()->numerify('##########'),
                'first-name' => $faker->firstName,
                'last-name' => $faker->lastName,
                'first-name_en' => $faker->firstName,
                'last-name_en' => $faker->lastName,
                'major_id' => $faker->numberBetween(1, 5),
                'idcard' => $faker->numerify('#############'),
                'birthdate' => $faker->date,
                'gender' => $faker->randomElement(['M', 'F']),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
