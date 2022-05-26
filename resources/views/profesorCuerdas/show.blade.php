@extends('layouts.app-master2')

@section('content')



@foreach($profesorCuerdas as $profesor)

<div class="card d-inline-flex" style="width: 22rem;">
<iframe width="350" height="315" src="https://www.youtube.com/embed/{{$profesor->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
<div class="card-body">
    <h5 class="card-title">{{$profesor->nombre}}</h5>
    <p class="card-text">{{$profesor->experiencia}}</p>
   

  </div>
</div>

@endforeach  


@endsection



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>