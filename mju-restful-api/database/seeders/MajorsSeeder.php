<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;
class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     {
        $majorsData = [
            ['major_id' => 1, 'name' => 'วิทยาการคอมพิวเตอร์', 'name_en' => 'Computer Science'],
            ['major_id' => 2, 'name' => 'บริหารธุรกิจ', 'name_en' => 'Business Administration'],
            ['major_id' => 3, 'name' => 'ไอที', 'name_en' => 'Information Technology'],
            ['major_id' => 4, 'name' => 'เกษตร', 'name_en' => 'Agriculture'],
            ['major_id' => 5, 'name' => 'สื่อสารดิจิตอล', 'name_en' => 'Digital Communication'],
        ];

        
        foreach ($majorsData as $data) {
            Major::create($data);
        }
}
}
}
