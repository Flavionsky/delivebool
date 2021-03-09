<?php

use Illuminate\Database\Seeder;

use App\Type;

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
        $type_restaurant= [
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
            'Vegan',
            'Fast Food'

          ];


          foreach ($type_restaurant as $type) {

            $newtype = new Type();

            $newtype->name = $type;

            $newtype->save();

            $restaurants = Restaurant::inRandomOrder()->limit(rand(1,5))->get();
            $newtype->restaurants()->attach($restaurants);

        }
    }
}

