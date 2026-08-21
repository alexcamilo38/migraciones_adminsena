<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #25c72f;">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center" href="/">

            <span class="bg-white rounded p-1 me-2">
                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                    alt="Logo SENA" width="50" height="50" class="img-fluid">
            </span>

            <span class="text-white fw-bold">
                Admin SENA
            </span>

        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>




        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center gap-2 ms-lg-3r">

            <li class="nav-item">
                <a class="nav-link text-white fw-semibold" href="/about">Quienes Somos</a>
            </li>


            <li class="nav-item dropdown">
                <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Administracion
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
        <form class="d-flex align-items-center m-0 me-4 me-lg-5" role="search">
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
        <a href="/login" class="btn btn-outline-light fw-bold px-3">
            Iniciar Sesión
        </a>

    </div>
    </div>
</nav>
