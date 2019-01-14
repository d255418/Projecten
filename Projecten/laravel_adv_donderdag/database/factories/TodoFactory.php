<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence(5),
        'description'   => $faker->text(400),
        'finished_at'   => $faker->optional(0.3)->dateTimeThisYear,
        'deadline'      => $faker->optional(0.5)->dateTimeThisMonth,
        'priority'      => $faker->numberBetween(1, 5)
    ];
});
