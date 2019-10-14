<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Auto::class, function (Faker $faker) {
    return [
        'brand' => $faker->lastName($maxNbChars = 20),
        'model' => ucwords($faker->domainWord($maxNbChars = 20)),
        'color' => ucwords($faker->safeColorName($maxNbChars = 20)),
        'year'  => $faker->year(1957, 2019),
        'kilometers' => $faker->numberBetween($min = 10, $max = 1000)*1000,
        'air' => $faker->boolean,
        'airbag' => $faker->boolean,
        'steering' => $faker->boolean,
        'abs' => $faker->boolean,
        'gps' => $faker->boolean
        
        
    ];
});
