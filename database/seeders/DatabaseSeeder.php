<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\StudentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TeacherSeeder::class,
            StudentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
