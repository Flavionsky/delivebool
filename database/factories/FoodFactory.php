<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Food;
use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'price' => rand(1,100),
      'kind_of_food'=> $faker->word,
      'description' => $faker->word,
      'image'=> $slug,
      'visibility' => rand(0,1),
      
    ];
});
