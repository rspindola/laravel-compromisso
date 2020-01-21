<?php

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'genre' => 'M',
        'birth_date' => $faker->date,
        'zipcode' => $faker->postcode,
        'address' => $faker->streetAddress,
        'number' => $faker->buildingNumber,
        'neighborhood' => $faker->state,
        'city' => $faker->city,
        'county' => $faker->country,
    ];
});
