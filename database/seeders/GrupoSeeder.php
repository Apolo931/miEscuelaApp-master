<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([

            'clave'         => '5AVP',
            'turno'         => 1,
            'semestre'      => 5,
            'descripcion'   => 'Grupo de programación vespertino'

        ]);
        Grupo::create([

            'clave'         => '5AMP',
            'turno'         => 0,
            'semestre'      => 5,
            'descripcion'   => 'Grupo de programación Matutino'

        ]);
        Grupo::create([

            'clave'         => '3AVO',
            'turno'         => 1,
            'semestre'      => 5,
            'descripcion'   => 'Grupo de ofimatica vespertino'

        ]);
        Grupo::create([

            'clave'         => '4AVCO',
            'turno'         => 1,
            'semestre'      => 5,
            'descripcion'   => 'Grupo de contabilidad vespertino'

        ]);
    }
}
