<nav class="navbar navbar-expand-lg navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('areas.create')}}">area</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('trainingcenters.registrar')}}">Centros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('computer.computador')}}">computador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('course.registro')}}">cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher.registro')}}">instructores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('apprentice.registro')}}">Aprendices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Hola</button>
        </form>
      </div>
    </div>
  </nav>



