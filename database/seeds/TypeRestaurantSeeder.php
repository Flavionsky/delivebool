<?php

use Illuminate\Database\Seeder;

use App\TypeRestaurant;

use App\Restaurant;

class TypeRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_restaurants= [
            'Cinese',
            'Giapponese',
            'Romano',
            'Pizzeria',
            'Cucina di Pesce',
            'Gelateria',
            'Yoghurteria',
            'Indiano',
            'Siciliano',
            'Tunisino',
            'Vegan'

          ];


          foreach ($type_restaurants as $type) {

            $newtype = new TypeRestaurant();

            $newtype->name = $type;

            $newtype->save();

            $restaurants = Restaurant::inRandomOrder()->limit(rand(1,5))->get();
            $newtype->restaurants()->attach($restaurants);

        }
    }
}

