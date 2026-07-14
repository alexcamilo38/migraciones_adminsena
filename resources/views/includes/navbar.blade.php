<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #25c72f;">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="/">
            <img src="https://www.sena.edu.co/Paginas/img/logo-sena-blanco.png" alt="logo_sena" width="45"
                height="45" class="me-2">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <form class="d-flex align-items-center" role="search">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">
                    🔍
                </span>
                <input class="form-control border-start-0" type="search" placeholder="Buscar..." aria-label="Buscar">

                <button class="btn btn-light text-success fw-bold border" type="submit">
                    Buscar
                </button>
            </div>
        </form>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('areas.create') }}">Área</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('trainingcenters.registrar') }}">Centros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('computer.computador') }}">Computadores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('course.registro') }}">Cursos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('teacher.registro') }}">Instructores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white me-2" href="{{ route('apprentice.registro') }}">Aprendices</a>
            </li>

            <li class="nav-item dropdown">
                <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Ver Listas
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
                    <li><a class="dropdown-item" href="/areas/list">📁 Lista Áreas</a></li>
                    <li><a class="dropdown-item" href="/trainingcenter/list">🏢 Lista Centros</a></li>
                    <li><a class="dropdown-item" href="/computer/list">💻 Lista Computadores</a></li>
                    <li><a class="dropdown-item" href="/course/list">📚 Lista Cursos</a></li>
                    <li><a class="dropdown-item" href="/teacher/list">👨‍🏫 Lista Instructores</a></li>
                    <li><a class="dropdown-item" href="/apprentice/list">👨‍🎓 Lista Aprendices</a></li>
                </ul>
            </li>

        </ul>

    </div>
    </div>
</nav>
