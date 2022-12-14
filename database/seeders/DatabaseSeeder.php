<?php

namespace Database\Seeders;

use Database\Seeders\EspecialidadSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\GrupoSeeder;
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
        EspecialidadSeeder::class,
        GrupoSeeder::class,
      ]);
    }
}
