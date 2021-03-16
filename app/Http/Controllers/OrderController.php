<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Braintree;

use App\Order;

use App\Payment;

use Illuminate\Support\Facades\DB;

use App\Food;

use Illuminate\Support\Facades\Auth;

use App\Restaurant;
use Illuminate\Queue\RedisQueue;

use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $transaction = $result->transaction;

            $data = $request->all();

            $foodsid = $data['itemid'];
            $foodsqty = $data['itemqty'];

            $current = Carbon::now();

            $order = new Order;

            $order->email = $data['email'];
            $order->name = $data['name_on_card'];
            $order->surname = $data['surname_on_card'];
            $order->city = $data['city'];
            $order->address = $data['address'];
            $order->mobile_phone = $data['mobile_phone'];
            $order->delivery_time = $current->addHours(2);
            $order->total_price = $data['amount'];
            $order->restaurant_id = $data['restaurantId'];

            
            $order->payment()->associate(
                Payment::firstOrCreate(
                    ['status' => 1],
                    )
                );
                
            $order->save();

            for($i=0; $i < count($foodsid); $i++){
                DB::table("food_order")->insert([
                    "food_id" => $foodsid[$i],
                    "order_id" => $order->id, 
                    "quantity" =>  $foodsqty[$i],
                    ]);
                }
                
                

            return redirect()->route('welcomepage')->with('success_message', 'Pagamento completato.Il tuo ID ordine è: ' . $transaction->id .'  Orario di arrivo previsto: ' . $order->delivery_time->hour.':'.$order->delivery_time->minute);
        } else {
            $errorString = "";

            foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }

            return back()->withErrors('An error occurred with the message: ' . $result->message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function orders()
    {
        $id = Auth::user()->id;

        $restaurant = Restaurant::find($id);
        
        $orders = Order::all();

        return view('orders', compact('restaurant', 'orders'));
    }
}
