@extends('layouts.app-master')

@section('content')

    <h1 class="container">Home</h1>
     
    @auth
        <p>Bienbenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado a la pagina</p>
        <p>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </p>
    @endauth

    @guest
        <p>para ver el contenido <a href="/login">inicia sesion</a></p>
    @endguest
    
@endsection

 