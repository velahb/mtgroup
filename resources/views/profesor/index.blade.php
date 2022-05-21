@extends('layouts.app-master')
@section('content')
@foreach($profesor as $profesor)
<div class="card d-inline-flex" style="width: 22rem;">
<iframe width="350rem" height="280" src="https://www.youtube.com/embed/DhZ0WTEkwkQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="card-body">
    <h5 class="card-title">{{$profesor->nombre}}</h5>
    <p class="card-text">{{$profesor->experiencia}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach    
@endsection
</body>

</html>