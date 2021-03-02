<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Food;

use App\Restaurant;

use Faker\Generator as Faker;

$factory->define(Food::class, function (Faker $faker) {

  $restaurants = Restaurant::all();
    return [
      'name' => $faker->word,
      'price' => $faker->randomFloat(2, 1 ,100),
      'image'=> $faker->imageUrl(640, 480),
      'description' => $faker->word,
      'visibility' => rand(0,1),
      'kind_of_food'=> $faker->word,
      'restaurant_id' => $faker->numberBetween(1, $restaurants->count())
    ];
});