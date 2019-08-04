<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SistemaAB\Curso::class,10)->create()->each(function(SistemaAB\Curso $curso){
            $curso->estudiante()->attach([
                rand(1,10),
                rand(11,20),
            ]);
        });
    }
}
