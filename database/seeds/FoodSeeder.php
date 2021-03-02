<?php

use Illuminate\Database\Seeder;

use App\Food;

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
    }
}
