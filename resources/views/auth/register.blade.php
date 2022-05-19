@extends('layouts.auth-master')

@section('content')
@include('layouts.partials.messages')
    <form action="/register" method="POST"> 
    @csrf
  <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <label for="exampleInputEmail1">Email</label>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-floating mb-3">
  <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
    <label for="exampleInputPassword1">Username</label>
   
  </div>
  <div class="form-floating mb-3">
  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <label for="exampleInputPassword1">Password</label>
  
  </div>
  <div class="form-floating mb-3">
  <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirma tu password">
    <label for="exampleInputPassword1">Confirmacion Password</label>
  
  </div>

  <div class="mb-3">
   <a href="/login">Login</a>
  
  </div>
  <button type="submit" class="btn btn-success">Crear usuario</button>
</form>
@endsection