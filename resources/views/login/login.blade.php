@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 85vh;">

    <div class="card border-0 shadow-lg overflow-hidden"
        style="width: 100%; max-width: 980px; border-radius: 24px;">

        <div class="row g-0">

            <!-- PARTE IZQUIERDA -->
            <div class="col-lg-5 text-white d-none d-lg-flex flex-column justify-content-between p-5"
                style="background: linear-gradient(145deg, #00324d 0%, #001f31 100%);">

                <div>

                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm"
                        style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.12);">

                        <span class="fs-3">🔑</span>

                    </div>

                    <h3 class="fw-bold mb-1">
                        Admin <span style="color: #39A900;">SENA</span>
                    </h3>

                    <p class="small text-white-50">
                        Portal de Acceso Administrativo
                    </p>

                </div>


                <div class="my-auto py-4">

                    <h5 class="fw-bold text-white mb-2">
                        ¡Bienvenido de nuevo!
                    </h5>

                    <p class="text-white-50 small mb-4">
                        Ingresa con tu correo institucional y selecciona tu rol asignado para acceder al panel correspondiente.
                    </p>

                    <div class="p-3 rounded-3"
                        style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">

                        <p class="mb-0 small text-white-50">

                            🛡️

                            <strong class="text-white">
                                Acceso Seguro:
                            </strong>

                            Tu información está protegida mediante autenticación por roles.

                        </p>

                    </div>

                </div>

            </div>


            <!-- PARTE DERECHA -->
            <div class="col-lg-7 p-4 p-xl-5 bg-white d-flex flex-column justify-content-center">

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div>

                        <h2 class="fw-bold text-dark mb-0 fs-3">
                            Iniciar Sesión
                        </h2>

                        <p class="text-muted small mb-0">
                            Ingresa tus credenciales para continuar
                        </p>

                    </div>

                    <span class="badge rounded-pill px-3 py-2 fw-semibold d-none d-sm-inline-block"
                        style="background-color: rgba(0, 50, 77, 0.08); color: #00324d;">

                        Sistema de Autenticación

                    </span>

                </div>


                <!-- FORMULARIO -->
                <form id="loginForm" onsubmit="executeLogin(event)">

                    @csrf

                    <div class="p-4 mb-3 rounded-3"
                        style="background-color: #f8f9fa; border: 1px solid #edf2f7;">


                        <!-- NOMBRE COMPLETO -->
                        <div class="mb-3">

                            <label for="name"
                                class="form-label fw-semibold text-secondary small mb-1">

                                Nombre Completo

                            </label>

                            <input id="name"
                                type="text"
                                class="form-control bg-white"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                autofocus
                                placeholder="Ej: Carlos Pérez"
                                style="border-radius: 8px; font-size: 0.9rem; padding: 0.6rem 0.8rem;">

                        </div>


                        <!-- CORREO -->
                        <div class="mb-3">

                            <label for="email"
                                class="form-label fw-semibold text-secondary small mb-1">

                                Correo Electrónico

                            </label>

                            <input id="email"
                                type="email"
                                class="form-control bg-white"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="ejemplo@sena.edu.co"
                                style="border-radius: 8px; font-size: 0.9rem; padding: 0.6rem 0.8rem;">

                        </div>


                        <!-- ROL -->
                        <div class="mb-3">

                            <label for="role"
                                class="form-label fw-semibold text-secondary small mb-1">

                                Ingresar como (Rol)

                            </label>

                            <select id="role"
                                class="form-select bg-white"
                                name="role"
                                required
                                style="border-radius: 8px; font-size: 0.9rem; padding: 0.6rem 0.8rem;">

                                <option value="" disabled selected>
                                    Selecciona tu rol...
                                </option>

                                <option value="estudiante">
                                    Aprendiz / Estudiante
                                </option>

                                <option value="profesor">
                                    Instructor / Profesor
                                </option>

                                <option value="administrador">
                                    Administrador
                                </option>

                            </select>

                        </div>


                        <!-- CONTRASEÑA -->
                        <div class="mb-0">

                            <label for="password"
                                class="form-label fw-semibold text-secondary small mb-1">

                                Contraseña

                            </label>

                            <input id="password"
                                type="password"
                                class="form-control bg-white"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••"
                                style="border-radius: 8px; font-size: 0.9rem; padding: 0.6rem 0.8rem;">

                        </div>

                    </div>


                    <!-- RECORDAR / CONTRASEÑA -->
                    <div class="d-flex justify-content-between align-items-center mb-4 px-1">

                        <div class="form-check">

                            <input class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember">

                            <label class="form-check-label text-muted small"
                                for="remember">

                                Recordarme

                            </label>

                        </div>


                        <a class="text-decoration-none small fw-semibold"
                            href="{{ url('/password/reset') }}"
                            style="color: #00324d;">

                            ¿Olvidaste tu contraseña?

                        </a>

                    </div>


                    <!-- BOTONES -->
                    <div class="d-grid gap-2 mb-3">

                        <!-- INGRESAR -->
                        <button type="submit"
                            class="btn text-white fw-bold py-2 shadow-sm d-flex justify-content-center align-items-center"
                            style="background-color: #39A900; border: none; border-radius: 10px; font-size: 0.95rem;">

                            Ingresar a la Plataforma

                        </button>


                        <!-- CREAR CUENTA -->
                        <a href="{{ url('/register') }}"
                            class="btn fw-semibold py-2 shadow-sm text-decoration-none"
                            style="border-radius: 10px; font-size: 0.9rem; border: 1px solid #00324d; color: #00324d; background-color: transparent;">

                            Crear una cuenta nueva

                        </a>

                    </div>

                </form>


                <!-- PIE -->
                <div class="text-center pt-3 border-top">

                    <p class="text-muted small mb-0">

                        ¿No tienes una cuenta?

                        <a href="{{ url('/register') }}"
                            class="fw-bold text-decoration-none"
                            style="color: #39A900;">

                            Regístrate aquí

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- ===================================================== -->
<!-- JAVASCRIPT DEL LOGIN -->
<!-- ===================================================== -->

<script>

function executeLogin(e) {

    e.preventDefault();


    // Obtener los datos

    const name = document.getElementById('name').value.trim();

    const email = document.getElementById('email').value.trim();

    const role = document.getElementById('role').value;

    const password = document.getElementById('password').value;


    // Verificar campos

    if (!name || !email || !role || !password) {

        alert('Por favor completa todos los campos.');

        return;

    }


    // Crear avatar

    const avatarUrl =
        `https://ui-avatars.com/api/?name=${encodeURIComponent(name)}&background=39A900&color=fff&bold=true`;


    // Crear sesión

    const userSession = {

        name: name,

        email: email,

        avatar: avatarUrl,

        role: role

    };


    // Guardar sesión

    localStorage.setItem(
        'user_session',
        JSON.stringify(userSession)
    );


    // Guardar rol

    localStorage.setItem(
        'user_role',
        role
    );


    // Guardar estado

    localStorage.setItem(
        'isLoggedIn',
        'true'
    );


    // =================================================
    // REDIRECCIÓN SEGÚN EL ROL
    // =================================================

    if (role === 'administrador') {

        // Administrador
        window.location.href = "{{ url('/admin') }}";

    }

    else if (role === 'profesor') {

        // Profesor
        window.location.href = "{{ url('/') }}";

    }

    else if (role === 'estudiante') {

        // Estudiante
        window.location.href = "{{ url('/student') }}";

    }

}

</script>

@endsection