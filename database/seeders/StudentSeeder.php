<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    public function run()
    {
       $studentFaker = \Faker\Factory::create();

       for($i=0;$i<=100;$i++) {
           DB::table('students')->insert([
               "name" => $studentFaker->name(),
               "dept" => $studentFaker->randomElement(["cst","tct","bba","dnt"]),
               "shift" => $studentFaker->randomElement(["1st","2nd","day","evening"]),
               "status" => $studentFaker->randomElement(["0","1"]),
           ]);
       }
    }
}