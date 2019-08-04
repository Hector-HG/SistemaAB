<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Solicitud;

$factory->define(Solicitud::class, function (Faker $faker) {
    return [
        'excerpt' =>$faker->text(100),
        'student_id' => rand(1,20),
    ];
});
