<?php

use App\Cupon;
use Faker\Generator as Faker;

$factory->define(Cupon::class, function (Faker $faker) {
    $finish_time = now()->addHours(rand(1, 100));
    return [
        'name' => $faker->word,
        'discount' => rand(10, 99),
        'validity' => $finish_time->format('Y-m-d'),
    ];
});
