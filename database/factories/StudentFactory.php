<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Estudiante;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,30),
        'career_id' => rand(1,5),
        'semester' => $faker->randomElement(['Primero','Segundo','Tercero','Cuarto','Quinto','Sexto','Septimo','Octavo','Noveno','Decimo','Onceavo']),
        'grade' => $faker->randomFloat(2,60,100),
    ];
});
