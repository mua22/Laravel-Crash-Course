<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'year'=>rand(1950,2018),
        'publisher'=>$faker->name,

    ];
});
