<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'genero_id' => $faker->numberBetween($min=1,$max=7),
        'autor' => $faker->name,
        'titulo' => $faker->streetName,
        'editorial' => $faker->domainWord,
        'edicion' => $faker->domainWord,
        'anio' => $faker->year($max='now'),
        'descripcion' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
