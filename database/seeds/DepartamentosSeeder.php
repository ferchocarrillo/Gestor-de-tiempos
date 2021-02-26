<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->truncate();


        DB::table('departamentos')->insert([
        'nombre'=>'Bogotá D.C.'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Amazonas'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Antioquia'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Arauca'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Atlántico'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Bolívar'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Boyacá'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Caldas'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Caquetá'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Casanare'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Cauca'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Cesar'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Chocó'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Córdoba'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Cundinamarca'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Guainía'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Guaviare'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Huila'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'La Guajira'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Magdalena'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Meta'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Nariño'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Norte de Santander'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Putumayo'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Quindío'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Risaralda'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'San Andrés y Providencia'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Santander'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Sucre'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Tolima'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Valle del Cauca'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Vaupés'
        ]);

        DB::table('departamentos')->insert([
        'nombre'=>'Vichada'
        ]);


    }
}
