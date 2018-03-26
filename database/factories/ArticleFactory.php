<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->company,
        'content'=> $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
