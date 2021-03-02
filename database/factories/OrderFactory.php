<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'city' => $faker->city,
        'address' => $faker->streetAddress,
        'mobile_phone' => $faker->e164PhoneNumber,
        'delivery_time' =>$faker->time(),
        'total_price' => $faker->randomFloat(2, 1 ,1000)

    ];
});
