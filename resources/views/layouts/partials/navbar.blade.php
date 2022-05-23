
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">MTgroup</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profesor">Viento</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profesorTeclado">Teclado</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profesorVoz">Voz</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profesorPercusion">Percusion</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profesorCuerdas">Cuerdas</a>
          </li> 
      </ul>
      <form class="d-flex" role="search">
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name ?? auth()->user()->username}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            
          </ul>
        </li>
        
        @endauth
       
        
      </ul>
      </form>
      
    </div>
  </div>
</nav>