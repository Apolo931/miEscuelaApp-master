<?php

namespace Database\Seeders;

use Database\Seeders\AlumnoSeeder;
use Illuminate\Database\Seeder;

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
        AlumnoSeeder::class,
      ]);
    }
}
