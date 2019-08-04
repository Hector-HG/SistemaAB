<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Program;

$factory->define(Program::class, function (Faker $faker) {
    return [
        'description' => $faker->unique()->randomElement(['ISCA', 'ISCB', 'ISCC', 'IGEA', 'IGEB','IGEC','IIA','IIB','IIC','IAA','IAB','IAC','IAMA','IAMB','IAMC']),
    ];
});
