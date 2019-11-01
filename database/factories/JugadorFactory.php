<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Jugador::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstNameMale($maxNbChars = 10),
        'lastname' =>$faker->lastName($maxNbChars = 15),
        'age' =>$faker->numberBetween($min = 16, $max = 36),
        'leg' => $faker->randomElement($array = array ('Derecha', 'Derecha', 'Izquierda', 'Izquierda', 'Ambidiestro')) ,
        'position' => $faker->randomElement($array = array ('Arquero','Defensor','Mediocampista', 'Delantero')),
    ];
});
