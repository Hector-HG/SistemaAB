<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SistemaAB\Instructor::class,10)->create()->each(function(SistemaAB\Instructor $instructor){
            $instructor->role()->attach([
                rand(1,1),
                rand(2,3),
            ]);
        });
    }
}
