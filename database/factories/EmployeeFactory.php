<?php

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'genre' => 'M',
        'birth_date' => $faker->dateTimeThisCentury,
        'zipcode' => $faker->postcode,
        'address' => $faker->streetAddress,
        'number' => $faker->buildingNumber,
        'neighborhood' => $faker->state,
        'city' => $faker->city,
        'county' => $faker->country,
    ];
});
