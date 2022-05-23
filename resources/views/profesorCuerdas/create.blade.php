<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Crear</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">MTgroup</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="d-flex" role="search">
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name ?? auth()->user()->username}}
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="/logout">Logout</a></li>
            
          </ul>
        </li>
        
        @endauth
       
      </ul>
      </form>
      
    </div>
  </div>
</nav>
<div class="container">
        <h4>Nuevo Profesor</h4>
        <div class="row">
          <div class="col-xl-12">
            <form action="{{route('profesorCuerdas.store')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" required maxlength="50" name="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="experiencia">Experiencia</label>
                <input type="text" class="form-control" id="experiencia" required  name="experiencia" placeholder="Experiencia">
              </div>
              <div class="form-group">
                <label for="video">Video</label>
                <input type="text" class="form-control" id="video" required maxlength="50" name="video" placeholder="Video">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Guardar">
                <input type="reset" class="btn btn-danger" value="Cancelar">
                <a href="javascript:history.back()">Ir al listado</a>
              </div>
            </form>
          </div>
        </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>