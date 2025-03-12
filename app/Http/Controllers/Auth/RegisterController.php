<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return $this->showRegistrationForm();
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());

        //Enviar correo de bienvenida
        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect('/login')->with('success','Account created successfully');

    }


    public function showRegistrationForm()
    {
    $images = [
        asset('assets/image/Mina.jpg'),
        asset('assets/image/image.png'),
         
         
    ];

    $randomImage = $images[array_rand($images)]; 

    return view('auth.register', compact('randomImage', 'images'));
    }


}
