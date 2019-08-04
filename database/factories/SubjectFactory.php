<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SistemaAB\Model;
use Faker\Generator as Faker;
use SistemaAB\Materia;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        'instructor_id' => $faker->numberBetween(1,10),
        'name' => $faker->unique()->randomElement(['Administracion De Base De Datos','Algebra Lineal','Arquitectura De Computadoras','Calculo Diferencial','Calculo Integral','Calculo Vectorial','Conmutacion Y Enrutamiento En Redes De Datos','Cultura Empresarial','Desarrollo Basado En Pruebas','Desarrollo De Aplicaciones Multiplaforma',
        'Ecuaciones Diferenciales','Estructura De Datos','Fisica General','Fundamentos De Base De Datos','Fundamentos De Ingenieria De Software','Fundamentos De Investigacion','Fundamentos De Programacion','Fundamentos De Telecomunicaciones','Gestion De Proyectos De Software',
        'Ingles 1','Inteligencia Artificial','Investigacion De Operaciones','Lenguajes Y Automatas I','Lenguajes Y Automatas Ii','Matematicas Discretas','Programacion Web','Programacion Web Avanzada','Sistemas Operativos','Sistemas Programables','Taller De Administracion',
        'Taller De Etica','Taller De Investigacion I','Topicos Selectos De Base De Datos','Tutorias',]),
        'credits' => rand(3,5),
        'schedule' => $faker->randomElement(['Lunes','Martes','Miercoles','Jueves','Viernes']),
        'day_time' => $faker->randomElement(['Matutino','Vespertino']),
    ];
});
