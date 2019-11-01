<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Casa::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('Chalet','Duplex','Depto')) ,
        'mt2' => $faker->numberBetween($min = 10, $max = 1000),
        'address' => ucwords($faker->streetAddress($maxNbChars = 80)),
        'rooms' => $faker->numberBetween($min = 1, $max = 10),
        'garage' => $faker->boolean,
        'price' => $faker->numberBetween($min = 30, $max = 500)*1000,


    ];
});
