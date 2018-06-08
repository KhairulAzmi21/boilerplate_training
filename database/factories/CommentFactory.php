<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'post_id' => $faker->numberBetween($min = 1, $max = 300),
    ];
});
