@extends('layouts.app-master')

@section('content')
@auth
<div class="col-auto my-2 mx-2">
  <a href="{{route('profesorPercusion.create')}}" class="btn btn-success">Nuevo</a>
</div>  

@foreach($profesorPercusion as $profesor)

<div class="card d-inline-flex" style="width: 22rem;">
<iframe width="350" height="315" src="https://www.youtube.com/embed/{{$profesor->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
<div class="card-body">
    <h5 class="card-title">{{$profesor->nombre}}</h5>
    <p class="card-text">{{$profesor->experiencia}}</p>
    <a href="#" class="btn btn-primary">Contactar</a>
    <a href="{{route('profesorPercusion.edit',$profesor->id)}}" class="btn btn-warning ">Editar</a>
    <form class='d-inline-flex'action="{{route('profesorPercusion.destroy',$profesor->id)}}" method="post">
      @csrf
      @method('DELETE')
    <input type="submit" class="btn btn-danger " value="Eliminar">
    </form>
  </div>
</div>

@endforeach  
@endauth
@guest
<p>Para ver el contenido<a href='/login'>Inicia Sesión</a></p>
@endguest
@endsection



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>