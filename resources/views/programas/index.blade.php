@extends('layouts.app') 

@section('content')
<div class="container my-5">

    <a href="{{ url('/') }}"  class="btn btn-outline-secondary rounded-pill px-4 py-2 text-decoration-none">
    ← inicio
</a>
    
    {{-- Encabezado principal --}}
    <div class="text-center mb-5">
        <span class="badge bg-success px-3 py-2 rounded-2 mb-2 fw-semibold">
            Convocatorias Abiertas
        </span>
        <h1 class="fw-bold text-dark display-5 mb-2">Oferta Educativa Destacada</h1>
        <p class="text-secondary fs-6">Descubre los programas de formación técnica y tecnológica disponibles en nuestro centro</p>
    </div>

    {{-- Grid de Tarjetas --}}
    <div class="row g-4">
        @foreach ($programas as $programa)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    
                    {{-- Imagen de la tarjeta con badge superpuesto --}}
                    <div class="position-relative">
                        <img src="{{ $programa['imagen'] }}" class="card-img-top object-fit-cover" style="height: 200px;" alt="{{ $programa['nombre'] }}">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 px-2 py-1 rounded-1 fw-normal fs-7">
                            {{ $programa['tipo'] }}
                        </span>
                    </div>

                    {{-- Cuerpo de la tarjeta --}}
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div>
                            <h5 class="card-title fw-bold text-dark mb-2">{{ $programa['nombre'] }}</h5>
                            <p class="card-text text-secondary small mb-4">
                                {{ $programa['descripcion'] }}
                            </p>
                        </div>

                        <div>
                            {{-- Metadatos (Duración y Modalidad) --}}
                            <div class="text-secondary small mb-3">
                                <div class="mb-1">
                                    <span>⏱️</span> <strong>Duración:</strong> {{ $programa['duracion'] }}
                                </div>
                                <div>
                                    <span>📍</span> <strong>Modalidad:</strong> {{ $programa['modalidad'] }}
                                </div>
                            </div>

                            {{-- Botón a la vista de detalles --}}
                            <a href="{{ route('programas.show', $programa['id']) }}" class="btn btn-outline-success w-100 fw-medium rounded-2 py-2">
                                Ver Detalles
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection