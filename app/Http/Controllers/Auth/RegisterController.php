<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Restaurant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:restaurants'],
            'image' => ['nullable', 'sometimes', 'mimes:jpeg,jpg,png,gif', 'max:10000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:100'],
            'p_iva' => ['required', 'string','min:11', 'max:13'],
            'types' => [],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   

        if (request()->file('image') != null) {
            $image = request()->file('image')->storePublicly('images');
        } else{
            $image = '';
        }

        $restaurant = Restaurant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'image' => $image,
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
            'address' => $data['address'],
            'city' => $data['city'],
            'p_iva' => $data['p_iva']
        ]);


        $restaurant->types()->sync($data['types']);

        return $restaurant;
    }
}
