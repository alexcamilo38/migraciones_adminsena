<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #25c72f;">
    <div class="container-fluid px-4">

        <!-- Marca / Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <span class="bg-white rounded p-1 me-2 d-inline-flex align-items-center justify-content-center">
                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                    alt="Logo SENA" width="40" height="40" class="img-fluid">
            </span>
            <span class="text-white fw-bold">
                Admin SENA
            </span>
        </a>

        <!-- Botón Toggle para Móviles -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido Colapsable -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navegación Izquierda -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center gap-2 ms-lg-3">

                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="{{ url('/about') }}">Quiénes Somos</a>
                </li>

                <!-- Menú Desplegable de Administración -->
                <li class="nav-item dropdown">
                    <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
                        <li><a class="dropdown-item py-2" href="{{ url('/areas/list') }}">📁 Lista Áreas</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/trainingcenter/list') }}">🏢 Lista Centros</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/computer/list') }}">💻 Lista Computadores</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/course/list') }}">📚 Lista Cursos</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/teacher/list') }}">👨‍🏫 Lista Instructores</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/apprentice/list') }}">👨‍🎓 Lista Aprendices</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Buscador -->
            <form class="d-flex align-items-center my-2 my-lg-0 me-lg-4" role="search">
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

            <!-- BLOQUE DINÁMICO DE AUTENTICACIÓN (Manejado por JavaScript) -->
            <div id="auth-nav-container">
                <!-- Estado por defecto mientras carga JS: Botón Iniciar Sesión -->
                <a href="{{ url('/login') }}" id="btn-login-nav" class="btn btn-outline-light fw-bold px-3 ms-lg-2 my-2 my-lg-0">
                    Iniciar Sesión
                </a>
            </div>

        </div>
    </div>
</nav>

<!-- Script para Mantener la Sesión Abierta Dinámicamente -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Si estamos en la ruta /admin, guardamos en el navegador que la sesión está activa
        if (window.location.pathname.includes('/admin')) {
            localStorage.setItem('isLoggedIn', 'true');
        }

        const container = document.getElementById('auth-nav-container');
        const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

        if (isLoggedIn) {
            // Muestra el Menú con el Ícono de Perfil
            container.innerHTML = `
                <div class="nav-item dropdown ms-lg-2 my-2 my-lg-0">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-2" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="rounded-circle bg-white text-success fw-bold d-flex align-items-center justify-content-center shadow-sm" 
                             style="width: 38px; height: 38px; font-size: 1.1rem; border: 2px solid rgba(255, 255, 255, 0.8);">
                            👤
                        </div>
                        <span class="fw-bold text-white d-none d-sm-inline">
                            Administrador
                        </span>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-2" aria-labelledby="userDropdown" style="border-radius: 12px;">
                        <li>
                            <div class="dropdown-header text-muted fw-semibold">
                                admin@sena.edu.co
                            </div>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item py-2 d-flex align-items-center gap-2" href="{{ url('/profile') }}">
                                👤 Mi Perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 d-flex align-items-center gap-2 text-danger fw-semibold" href="#" id="btn-logout-nav">
                                ➔ Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            `;

            // Evento al dar clic en "Cerrar Sesión"
            document.getElementById('btn-logout-nav').addEventListener('click', function(e) {
                e.preventDefault();
                localStorage.removeItem('isLoggedIn'); // Elimina la sesión guardada
                window.location.href = "{{ url('/login') }}"; // Redirige al login
            });
        }
    });
</script>