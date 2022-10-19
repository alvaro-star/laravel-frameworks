<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function redirectProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callbackProvider($provider)
    {
        $user = Socialite::driver($provider)->user();
        dd($user);
        // $user->token
    }
}
