<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;

class LoginController extends Controller
{

    public function show (){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login (LoginRequest $request){


        $credentials = $request->only('username','password');
        $remember = $request->filled('remember'); // Verifica si "Remember Me" fue marcado

        if (filter_var($credentials['username'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $credentials['username'];
            unset($credentials['username']);
        }
        
        if(Auth::attempt($credentials, $remember)){
            $user = Auth::user();

            \Log::info('Usuario autenticado con remember me: ', ['user' => $user]);
            
            return $this->authenticated($request, $user);
        }

        return redirect()->to('/login')->withErrors('Username and/or password is incorrect');
        
    }

    public function authenticated(Request $request, $user){
         
        return redirect()->intended('/index')->with('success', 'Welcome Back');

    }
}
