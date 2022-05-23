@extends('layouts.app-master')
@section('content')
    @auth
   
   <img src="{{URL::asset('assets/img/video-player.png')}}" style="margin-left:40%; margin-top:10rem" width="300px">
   
    @endauth

    @guest
    <p>Para ver el contenido <a href='/login'>Inicia Sesión</a></p>
    @endguest

@endsection
   