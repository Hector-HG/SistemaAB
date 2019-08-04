<?php

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SistemaAB\Solicitud::class,25)->create()->each(function(SistemaAB\Solicitud $request){
            $request->materia()->attach([
                rand(1,30),
            ]);
        });
    }
}
