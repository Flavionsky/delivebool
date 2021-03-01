<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Food::class, 40)->create();
        $faker->addProvider(new RicLeP\Faker\LoremFlickrFakerProvider($faker));
    }
}
