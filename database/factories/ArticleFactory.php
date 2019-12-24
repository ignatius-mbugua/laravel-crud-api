<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //define the fake data
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
