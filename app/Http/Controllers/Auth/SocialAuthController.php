<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            // Buscar usuario por email
            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                // Si el usuario no existe, lo creamos
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' => bcrypt(str()->random(16)), // Generamos una contraseña aleatoria
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                ]);
            }

            Auth::login($user);

            return redirect('/home')->with('success', 'Welcome back!');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Error logging in with ' . ucfirst($provider));
        }
    }
    
}
