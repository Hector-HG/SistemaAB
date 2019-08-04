<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Role;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'description' => $faker->unique()->randomElement(['Maestro','Coordinador','Administrador']),
    ];
});
