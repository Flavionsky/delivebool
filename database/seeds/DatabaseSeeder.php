<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RestaurantSeeder::class);
        $this->call(TypeRestaurantSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PaymentSeeder::class);
    }
}
