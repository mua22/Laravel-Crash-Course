<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->realText(400,2),
    ];
});
