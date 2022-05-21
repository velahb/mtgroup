@extends('layouts.app-master')
@section('content')
    @auth
   
   
   
    @endauth

    @guest
    <p>Para ver el contenido <a href='/login'>Inicia Sesión</a></p>
    @endguest

@endsection
   