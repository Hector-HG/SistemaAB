<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('carreras')->insert([
        'description' => 'Ingeniería Industrial'
    ]);

    DB::table('carreras')->insert([
        'description' => 'Ingeniería Ambiental'
    ]);

    DB::table('carreras')->insert([
        'description' => 'Ingeniería en Gestion Empresarial'
    ]);

    DB::table('carreras')->insert([
        'description' => 'Ingeniería en Industrias Alimentarias'
    ]);

    DB::table('carreras')->insert([
        'description' => 'Ingeniería en Sistemas Computacionales'
    ]);
    }
}
