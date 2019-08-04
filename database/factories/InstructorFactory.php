<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Instructor;

$factory->define(Instructor::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,30),
        'speciality_id' => rand(1,10),
    ];
});
