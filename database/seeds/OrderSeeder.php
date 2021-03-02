<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Order;

use App\Food;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<40; $i++) {

            $neworder = new Order();

            $neworder->name = $faker->firstName;
            $neworder->surname = $faker->lastName;
            $neworder->city = $faker->city;
            $neworder->address = $faker->streetAddress;
            $neworder->mobile_phone = $faker->e164PhoneNumber;
            $neworder->delivery_time =$faker->time();
            $neworder->total_price = $faker->randomFloat(2, 1 ,1000);

            $neworder->save();

            
            $foods = Food::inRandomOrder()->limit(rand(1,20))->get();
            
            $neworder->foods()->attach($foods);

        }
    }
}
