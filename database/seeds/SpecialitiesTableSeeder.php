<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->insert([
            'description' => 'Ingeniería Industrial'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Ingeniería Ambiental'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Ingeniería en Gestion Empresarial'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Ingeniería en Industrias Alimentarias'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Ingeniería en Sistemas Computacionales'
        ]);

        DB::table('specialities')->insert([
            'description' => 'Recursos Humanos'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Ciencias basicas'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Tecnologias de la Informacion'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Docencia'
        ]);
    
        DB::table('specialities')->insert([
            'description' => 'Pedagogia'
        ]);
    }
}
