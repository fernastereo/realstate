<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->email,
        'phonenumber' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'dateinit' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'avatar' => $faker->imageUrl($width = 250, $height = 250, 'business'),
    ];
});
