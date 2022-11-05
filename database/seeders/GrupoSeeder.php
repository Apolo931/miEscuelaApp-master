<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;


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
            'especialidad_id'       => 1,
            'clave'                 => '5AVP',
            'turno'                 => 1,
            'semestre'              => 5,
            'descripcion'           => 'Grupo de programación vespertino'

        ]);
        Grupo::create([

            'especialidad_id'       => 1,
            'clave'                 => '5AMP',
            'turno'                 => 0,
            'semestre'              => 5,
            'descripcion'           => 'Grupo de programación Matutino'

        ]);
        Grupo::create([

            'especialidad_id'       => 2,
            'clave'                 => '3AVO',
            'turno'                 => 0,
            'semestre'              => 3,
            'descripcion'           => 'Grupo de ofimatica vespertino'

        ]);
        Grupo::create([

            'especialidad_id'       => 2,
            'clave'                 => '4AVCO',
            'turno'                 => 1,
            'semestre'              => 5,
            'descripcion'           => 'Grupo de contabilidad vespertino'

        ]);

        Grupo::create([

            'especialidad_id'       => 3,
            'clave'                 => '4AVE',
            'turno'                 => 1,
            'semestre'              => 5,
            'descripcion'           => 'Grupo de contabilidad vespertino'

        ]);
    }
}
