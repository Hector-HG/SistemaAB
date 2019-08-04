<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Curso;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'materia_id' => rand(1,30),
        'program_id' => rand(1,15),
        'places' => rand(15,30),
    ];
});
