<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {

    if(rand(1,2)==1){
        return [
            'contenido' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'user_id' => $faker->numberBetween($min=2,count(App\User::all())),
            'comentario_id' => $faker->numberBetween($min=2,count(App\User::all())),
            'comentario_type' => 'App\User'
        ];
    } else {
        return [
            'contenido' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'user_id' => $faker->numberBetween($min=2,count(App\User::all())),
            'comentario_id' => $faker->numberBetween($min=2,count(App\Libro::all())),
            'comentario_type' => 'App\Libro'
        ];
    }
    
});
