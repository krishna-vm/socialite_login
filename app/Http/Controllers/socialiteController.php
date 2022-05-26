<?php

namespace App\Http\Controllers;


use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Validator;

class socialiteController extends Controller
{

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

    public function redirectTopGoogle()
    {
        /**
         * FUNCTIONAL NAME - redirectTopGoogle()
         * DESCRIPTION  - redirectTopGoogle information of respective user - part of LoginController.
         * @author	KRISHNA MALIK on 26/05/2022
         * @parameters	Illuminate\Http\Request $request;
         * @return   View google/account
         */
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        /**
         * FUNCTIONAL NAME - handleGoogleCallback()
         * DESCRIPTION  - handleGoogleCallback information of respective user - part of LoginController.
         * @author	KRISHNA MALIK on 26/05/2022
         * @parameters	Illuminate\Http\Request $request;
         * @return   View home
         */
        $user = Socialite::driver('google')->user();
        // dd($user);
        // dd($user->name);
        $slug = $user->avatar;

    $data = User::updateOrCreate([
        'name' =>$user->name,
        'email' => $user->email,
        'image' => $slug,
        'provider_id' => $user->id,
        'provider' =>'google',
        'password' =>Hash::make('12345678'),
       ]);
       return view('auth/login');
    }

}
