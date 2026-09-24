@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 mt-4 mb-5">

    <!-- HERO DE BIENVENIDA -->
    <!-- Banner superior con degradado de colores institucionales y bordes redondeados -->
    <div class="p-5 mb-4 rounded-5 shadow-lg text-white position-relative overflow-hidden"
         style="background: linear-gradient(135deg, #39A900 0%, #143084 100%);">

        <!-- Contenido textual del Hero (Título, badge y subtítulo) -->
        <div class="position-relative" style="z-index: 2;">
            <!-- Badge o insignia del panel -->
            <span class="badge bg-white text-success fw-bold px-3 py-2 rounded-pill mb-3">
                <i class="bi bi-mortarboard-fill"></i> Panel del Aprendiz
            </span>

            <!-- Saludo personalizado con el nombre del usuario autenticado (con fallback 'Aprendiz') -->
            <h1 class="fw-bold mb-1">
                ¡Hola, {{ auth()->user()?->name ?? 'Aprendiz' }}! 👋
            </h1>
            <p class="mb-0 fs-5 opacity-75">
                Bienvenido a tu espacio de formación SENA. Aquí tienes tus accesos directos.
            </p>
        </div>

        <!-- Círculos decorativos de fondo usando un icono en marca de agua -->
        <div class="position-absolute top-0 end-0 opacity-25" style="font-size: 12rem; line-height: 1;">
            <i class="bi bi-mortarboard-fill"></i>
        </div>
    </div>

    <!-- ACCESOS DIRECTOS -->
    <!-- Título de la sección de accesos directos -->
    <h5 class="fw-bold text-secondary mb-3">
        <i class="bi bi-lightning-charge-fill text-warning"></i> Accesos Directos
    </h5>

    <!-- Grilla de tarjetas para accesos directos -->
    <div class="row g-4 mb-4">

        <!-- Tarjeta: REGISTRAR APRENDIZ -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('apprentice.registro') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card border-start border-4 border-success">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #d1e7dd;">
                            <i class="bi bi-person-plus-fill fs-3 text-success"></i>
                        </div>
                        <!-- Texto descriptivo de la acción -->
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Registrar Aprendiz</h6>
                            <small class="text-muted">Crear y dar de alta un nuevo aprendiz</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tarjeta: Programas / Programs -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('programas.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e8f7e0;">
                            <i class="bi bi-journal-bookmark-fill fs-3 text-success"></i>
                        </div>
                        <!-- Texto descriptivo -->
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Programs</h6>
                            <small class="text-muted">Ver programas y diseño curricular</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tarjeta: Ambientes -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('environments.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e6ebfa;">
                            <i class="bi bi-building-fill fs-3" style="color: #143084;"></i>
                        </div>
                        <!-- Texto descriptivo -->
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Ambientes</h6>
                            <small class="text-muted">Aulas y laboratorios asignados</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tarjeta: Anuncios -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('announcements.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #fff3cd;">
                            <i class="bi bi-megaphone-fill fs-3 text-warning"></i>
                        </div>
                        <!-- Texto descriptivo -->
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Anuncios</h6>
                            <small class="text-muted">Noticias y convocatorias</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tarjeta: Academic Programs -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('programas.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #e0f7fa;">
                            <i class="bi bi-tags-fill fs-3 text-info"></i>
                        </div>
                        <!-- Texto descriptivo -->
                        <div>
                            <h6 class="fw-bold mb-1 text-dark">Academic Programs</h6>
                            <small class="text-muted">Cursos y formación disponible</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tarjeta: Mi Ficha -->
        <div class="col-md-6 col-lg-4">
            <a href="{{ route('cohorts.index') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-card">
                    <div class="card-body d-flex align-items-center gap-3 p-4">
                        <!-- Contenedor del icono -->
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 60px; height: 60px; background-color: #fce4ec;">
                            <i class="bi bi-people-fill fs-3 text-danger"></i>
                        </div>
                        <!-- Texto descriptivo -->
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
    <!-- Contenedor de estado de matrícula actual del aprendiz -->
    <div class="card border-0 shadow-sm rounded-4 mb-5">
        <div class="card-header bg-white border-0 pt-4 px-4">
            <h5 class="fw-bold mb-0">
                <i class="bi bi-clipboard-check-fill text-success"></i> Resumen de tu Matrícula
            </h5>
        </div>
        <div class="card-body px-4 pb-4">
            <div class="row text-center g-3">

                <!-- Campo: Programa -->
                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Program</small>
                        <span class="fw-bold">Sin asignar</span>
                    </div>
                </div>

                <!-- Campo: Tipo -->
                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Tipo</small>
                        <span class="fw-bold">—</span>
                    </div>
                </div>

                <!-- Campo: Modalidad -->
                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Modalidad</small>
                        <span class="fw-bold">—</span>
                    </div>
                </div>

                <!-- Campo: Ambiente -->
                <div class="col-6 col-md-3">
                    <div class="p-3 bg-light rounded-4">
                        <small class="text-muted d-block">Ambiente</small>
                        <span class="fw-bold">Sin asignar</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SECCIÓN DE PROGRAMAS SENA -->
    <section class="py-4">
        <h2 class="text-center text-success fw-bold mb-4">Mira Programs</h2>
        <div class="row g-4 justify-content-center">
            
            {{-- Recorrido dinámico sobre el listado de programas --}}
            @forelse($programs as $program)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card border-0 shadow-sm rounded-4 bg-white card-hover overflow-hidden d-flex flex-column justify-content-between" 
                        style="width: 320px; height: 380px; flex-shrink: 0;">
                        
                        <!-- BANNER / IMAGEN DE PORTADA -->
                        <div>
                            <div class="position-relative" style="height: 140px; background-color: #e8f0fe;">
                                {{-- Condicional para evaluar y renderizar la imagen del programa si existe --}}
                                @if(!empty($program->urlFoto))
                                    <img src="{{ Str::startsWith($program->urlFoto, 'images/') ? asset('storage/' . $program->urlFoto) : asset('storage/images/' . $program->urlFoto) }}" 
                                         alt="{{ $program->name }}" 
                                         class="w-100 h-100 object-fit-cover">
                                @else
                                    {{-- Placeholder cuando no hay imagen disponible --}}
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center text-success">
                                        <i class="bi bi-mortarboard fs-1 opacity-50"></i>
                                    </div>
                                @endif

                                <!-- Badge tipo de programa -->
                                @if($program->type)
                                    <span class="badge bg-success position-absolute top-0 end-0 m-3 shadow-sm">
                                        {{ $program->type }}
                                    </span>
                                @endif
                            </div>

                            <!-- CONTENIDO DE LA TARJETA -->
                            <div class="p-3 custom-scrollbar" style="overflow-y: auto; max-height: 130px;">
                                <h3 class="h5 fw-bold text-dark mb-1" style="font-size: 1.1rem; line-height: 1.3;">
                                    {{ $program->name }}
                                </h3>
                                <p class="text-secondary mb-0" style="font-size: 0.85rem; line-height: 1.4; color: #5f6368;">
                                    {{ $program->description }}
                                </p>
                            </div>
                        </div>

                        <!-- PARTE INFERIOR (DETALLES Y ENLACE) -->
                        <div class="px-3 pb-3">
                            <div class="p-2 rounded-3 mb-2" style="background-color: #f8f9fa;">
                                <!-- Duración -->
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <small class="text-muted" style="font-size: 0.78rem;">
                                        <i class="bi bi-clock text-success me-1"></i> Duration:
                                    </small>
                                    <small class="fw-semibold text-dark" style="font-size: 0.78rem;">
                                        {{ $program->duration ?? 'N/A' }}
                                    </small>
                                </div>
                                <!-- Modalidad -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted" style="font-size: 0.78rem;">
                                        <i class="bi bi-laptop text-primary me-1"></i> Modality:
                                    </small>
                                    <small class="fw-semibold text-dark" style="font-size: 0.78rem;">
                                        {{ $program->modality ?? 'N/A' }}
                                    </small>
                                </div>
                            </div>

                            <!-- Enlace para explorar el programa -->
                            <div class="text-end">
                                <a href="#" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1" 
                                    style="color: #1e7e34; font-size: 0.85rem;">
                                    Explore program <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            {{-- Estado por defecto si la colección de programas está vacía --}}
            @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No programs available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- SECCIÓN DE ANUNCIOS SENA -->
    <section class="py-5">
        <h2 class="text-center text-success fw-bold mb-4">Anuncios SENA</h2>
        
        <div class="row g-4 justify-content-center">
            
            {{-- Recorrido dinámico sobre la lista de anuncios --}}
            @forelse($announcements as $item)
                <div class="col-12 col-md-4">
                    
                    {{-- Caso 1: El anuncio cuenta con imagen adjunta --}}
                    @if(!empty($item->urlFoto))
                        <div class="card border-0 shadow-sm card-hover rounded-4 overflow-hidden" style="height: 280px;">
                            <img src="{{ Str::startsWith($item->urlFoto, 'images/') ? asset('storage/' . $item->urlFoto) : asset('storage/images/' . $item->urlFoto) }}" 
                                 class="card-img-top object-fit-cover" 
                                 style="height: 140px; flex-shrink: 0;" 
                                 alt="{{ $item->title }}">
                            <div class="card-body" style="overflow-y: auto;">
                                <small class="text-muted d-block mb-1">{{ $item->publish_date }}</small>
                                <h5 class="card-title text-capitalize fw-semibold">{{ $item->title }}</h5>
                                <p class="card-text text-secondary mb-0">
                                    {{ $item->content }}
                                </p>
                            </div>
                        </div>
                    {{-- Caso 2: El anuncio es puramente textual (sin imagen) --}}
                    @else
                        <div class="card border-0 border-start border-4 border-success shadow-sm card-hover bg-light-subtle rounded-4" style="height: 280px;">
                            <div class="card-body" style="overflow-y: auto;">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="badge bg-success-subtle text-success border border-success-subtle">Anuncio</span>
                                    <small class="text-muted">{{ $item->publish_date }}</small>
                                </div>
                                <h5 class="card-title text-capitalize fw-bold text-success mb-3">
                                    {{ $item->title }}
                                </h5>
                                <p class="card-text text-dark-subtle mb-0">
                                    {{ $item->content }}
                                </p>
                            </div>
                        </div>
                    @endif

                </div>
            {{-- Estado si la colección de anuncios está vacía --}}
            @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No hay anuncios publicados por el momento.</p>
                </div>
            @endforelse

        </div>
    </section>

</div>

<!-- ESTILOS CSS PERSONALIZADOS (Efectos de elevación e interacción al pasar el cursor) -->
<style>
    /* Efecto de elevación ligera para tarjetas de accesos directos */
    .hover-card {
        transition: all 0.2s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.1) !important;
    }
    /* Efecto de elevación para tarjetas de programas y anuncios */
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
    }
</style>

@endsection