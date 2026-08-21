@extends('layouts.app')

@section('content')
<div class="container my-5">

    {{-- Botón Volver --}}
    <div class="mb-4">
        <a href="{{ route('programas.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
            &larr; Volver a la Oferta Educativa
        </a>
    </div>

    {{-- Encabezado centralizado --}}
    <div class="text-center mb-5">
        <span class="badge bg-success px-3 py-2 rounded-2 mb-2 fw-semibold">
            Convocatorias Abiertas
        </span>
        <h1 class="fw-bold text-dark display-6 mb-2">Detalle del Programa</h1>
        <p class="text-secondary fs-6">Conoce la información completa del programa de formación seleccionado</p>
    </div>

    {{-- Contenedor Principal de Detalle --}}
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    
                    {{-- Columna de la Imagen --}}
                    <div class="col-md-5 position-relative">
                        <img src="{{ $programa['imagen'] }}" class="img-fluid h-100 w-100 object-fit-cover" style="min-height: 280px;" alt="{{ $programa['nombre'] }}">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 px-3 py-2 rounded-2 fs-6 fw-normal">
                            {{ $programa['tipo'] }}
                        </span>
                    </div>

                    {{-- Columna de la Información --}}
                    <div class="col-md-7 p-4 p-lg-5 d-flex flex-column justify-content-between bg-white">
                        <div>
                            <h2 class="fw-bold text-dark mb-3">{{ $programa['nombre'] }}</h2>
                            <p class="text-secondary mb-4 fs-6 leading-relaxed">
                                {{ $programa['descripcion'] }}
                            </p>

                            {{-- Sección de Metadatos destacada --}}
                            <div class="border-top border-bottom py-3 mb-4">
                                <div class="row text-muted">
                                    <div class="col-6 d-flex align-items-center gap-2">
                                        <span class="fs-5">⏱️</span>
                                        <div>
                                            <small class="d-block text-uppercase fw-bold text-muted" style="font-size: 0.7rem;">Duración</small>
                                            <strong class="text-dark fs-6">{{ $programa['duracion'] }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center gap-2">
                                        <span class="fs-5">📍</span>
                                        <div>
                                            <small class="d-block text-uppercase fw-bold text-muted" style="font-size: 0.7rem;">Modalidad</small>
                                            <strong class="text-dark fs-6">{{ $programa['modalidad'] }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection