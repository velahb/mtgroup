@extends('layouts.app-master')
@section('content')
<div class="col-auto my-2 mx-2">
  <a href="{{route('profesorTeclado.create')}}" class="btn btn-success">Nuevo</a>
</div>  


@foreach($profesorTeclado as $profesor)

<div class="card d-inline-flex" style="width: 22rem;">
<iframe width="350" height="315" src="https://www.youtube.com/embed/{{$profesor->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
<div class="card-body">
    <h5 class="card-title">{{$profesor->nombre}}</h5>
    <p class="card-text">{{$profesor->experiencia}}</p>
    <a href="#" class="btn btn-primary">Contactar</a>
    <a href="{{route('profesorTeclado.edit',$profesor->id)}}" class="btn btn-warning ">Editar</a>
    <form class='d-inline-flex'action="{{route('profesorTeclado.destroy',$profesor->id)}}" method="post">
      @csrf
      @method('DELETE')
    <input type="submit" class="btn btn-danger " value="Eliminar">
    </form>
  </div>
</div>

@endforeach  
@endsection
</body>
</html>