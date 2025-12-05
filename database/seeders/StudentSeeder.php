<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // fake data seeding 

        foreach (range(1, 10) as $i) {
            student::create([
                'stu_id'   => fake()->unique()->randomNumber(5),
                'stu_name' => fake()->name(),
                'stu_age'  => fake()->numberBetween(18, 40),
                'stu_city' => fake()->city(),
            ]);
        }


        // $json = File::get('database/json/students.json');
        // $student_data = collect(json_decode($json));

        // $student_data->each(function ($student) {
        //     student::create([
        //         'stu_id'   => $student->stu_id,
        //         'stu_name' => $student->stu_name,
        //         'stu_age'  => $student->stu_age,
        //         'stu_city' => $student->stu_city,
        //     ]);
        //     // student::insert($student);
        // });
    }
}
