<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Payment;

use App\Order;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {
        $orders = Order::all();

        for($i=0; $i<=20; $i++){

            $newpayment = new Payment();
    
            $newpayment->status = rand(0,1);

            $newpayment->order_id = $faker->numberBetween(1, $orders->count());
    
            $newpayment->save();

        }
    }
}
