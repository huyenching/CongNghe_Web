<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('classes')->insert([
            'first_name'=> $faker->firstName,
            'last_name'=> $faker->lastName,
            'date_of_birth'=> $faker->date,
            'parent_phone'=> $faker->phoneNumber,
            'class_id'=> $faker->numberBetween(1,10),
           
   ]);
}
    
    }
}
