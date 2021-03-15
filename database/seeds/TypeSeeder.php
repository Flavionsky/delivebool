<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeSeeder extends Seeder
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

        }
    }
}

