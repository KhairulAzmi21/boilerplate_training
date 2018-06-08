<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'body'  => $faker->paragraph($nbSentences = 50),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'category_id' => $faker->numberBetween($min = 1, $max = 12),
    ];
});
