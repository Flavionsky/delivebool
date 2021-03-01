<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Food;
use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'price' => randomFloat(2, 1 ,100),
      'kind_of_food'=> $faker->word,
      'description' => $faker->word,
      'image'=> $faker->imageUrl(640, 480, ['dish']),
      'visibility' => rand(0,1),
      
    ];
});