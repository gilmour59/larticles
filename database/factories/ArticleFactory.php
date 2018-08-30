<?php

use Faker\Generator as Faker;

$factory->define(App\Articles::class, function (Faker $faker) { 
    return [
        'name' => $faker->text(20),
        'body' => $faker->text(50)
    ];
});
