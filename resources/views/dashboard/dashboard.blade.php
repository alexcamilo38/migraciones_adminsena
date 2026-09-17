@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 mt-4 mb-5">

    <!-- HERO DE BIENVENIDA -->
    <div class="p-5 mb-4 rounded-5 shadow-lg text-white position-relative overflow-hidden"
         style="background: linear-gradient(135deg, #39A900 0%, #143084 100%);">

        <div class="position-relative" style="z-index: 2;">
            <span class="badge bg-white text-success fw-bold px-3 py-2 rounded-pill mb-3">
                <i class="bi bi-mortarboard-fill"></i> Panel del Aprendiz
            </span>

            <h1 class="fw-bold mb-1">
                ¡Hola, {{ auth()->user()?->name ?? 'Aprendiz' }}! 👋
            </h1>
            <p class="mb-0 fs-5 opacity-75">
                Bienvenido a tu espacio de formación SENA. Aquí tienes tus accesos directos.
            </p>
        </div>

        <!-- Círculos decorativos -->
        <div class="position-absolute top-0 end-0 opacity-25" style="font-size: 12rem; line-height: 1;">
            <i class="bi bi-mortarboard-fill"></i>
        </div>
    </div>

    <!-- ACCESOS DIRECTOS -->
    <h5 class="fw-bold text-secondary mb-3">
        <i class="bi bi-lightning-charge-fill text-warning"></i> Accesos Directos
    </h5>

    <div class="row g-4 mb-4">

        <!-- REGISTRAR APRENDIZ (Usando appentice.create) -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('apprentice.registro') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card border-start border-4 border-success">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #d1e7dd;">
                            <i class="bi bi-person-plus-fill fs-3 text-success"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Registrar Aprendiz</h6>
                            <small class="text-muted">Crear y dar de alta un nuevo aprendiz</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Programas -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('programas.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e8f7e0;">
                            <i class="bi bi-journal-bookmark-fill fs-3 text-success"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Programas</h6>
                            <small class="text-muted">Ver oferta y diseño curricular</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Ambientes -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('environments.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e6ebfa;">
                            <i class="bi bi-building-fill fs-3" style="color: #143084;"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Ambientes</h6>
                            <small class="text-muted">Aulas y laboratorios asignados</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Anuncios -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('announcements.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #fff3cd;">
                            <i class="bi bi-megaphone-fill fs-3 text-warning"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Anuncios</h6>
                            <small class="text-muted">Noticias y convocatorias</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Ofertas Académicas -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('offers.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e0f7fa;">
                            <i class="bi bi-tags-fill fs-3 text-info"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Ofertas Académicas</h6>
                            <small class="text-muted">Cursos y formación disponible</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Mi Ficha -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('cohorts.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #fce4ec;">
                            <i class="bi bi-people-fill fs-3 text-danger"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Mi Ficha</h6>
                            <small class="text-muted">Información de grupo y jornada</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <!-- RESUMEN DE MATRÍCULA -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                <i class="bi bi-clipboard-check-fill text-success"></i> Resumen de tu Matrícula
            </h5>
        </div>
        <div class="card-body px-4 pb-4">
            <div class="row text-center g-3">

                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Programa</small>
                        <span class="fw-bold">Sin asignar</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Tipo</small>
                        <span class="fw-bold">—</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Modalidad</small>
                        <span class="fw-bold">—</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Ambiente</small>
                        <span class="fw-bold">Sin asignar</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- CERRAR SESIÓN -->
    @auth
        <div class="d-flex justify-content-end mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger rounded-pill px-4">
                    <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                </button>
            </form>
        </div>
    @endauth

</div>

<style>
    .hover-card {
        transition: all 0.2s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.1) !important;
    }
</style>
@endsection