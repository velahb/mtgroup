@extends('layouts.auth-master')

@section('content')
<form action="/login" method="POST">
    @csrf
    
    @include('layouts.partials.messages')
    <h1 class="h1 mb-1 fw-normal">Login</h1>
    <div class="form-group form-floating mb-3">
      
        <input type="text" name="username" class="form-control">
        <label for="floatingName">Email or Username</label>
    </div>
   
    <div class="form-group form-floating mb-3">
        <input type="password" name="password" class="form-control">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="mb-3">
   <a href="/register">Registrarse</a>
  
  </div>
    <input type="submit" value="Ingresar" class="btn btn-success"></input>
</form>



@endsection