<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0;$i<=100;$i++) {
            DB::table('teachers')->insert([
                "name" => $faker->name(),
                "email" => $faker->safeEmail,
                "mobile" => $faker->phoneNumber,
                "age" => $faker->numberBetween(25, 50),
                "gender" => $faker->randomElement(["male", "female", "others"]),
                "address_info" => $faker->address,
            ]);
        }
        
    }
}
