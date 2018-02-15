<?php

use Faker\Generator as Faker;

$factory->define(App\Template::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->randomHtml(1,2),
    ];
});
