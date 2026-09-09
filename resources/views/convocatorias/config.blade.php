@extends('layouts.app')

@section('content')
@php
    // Datos de ejemplo (simulados), mientras no haya columna real en la BD
    $programs = [
        ['nombre' => 'Análisis y Desarrollo de Software', 'tipo' => 'Tecnólogo', 'fecha_limite' => '2026-10-15'],
        ['nombre' => 'Gestión Empresarial', 'tipo' => 'Tecnólogo', 'fecha_limite' => '2026-09-30'],
        ['nombre' => 'Sistemas y Mantenimiento de Equipos', 'tipo' => 'Técnico', 'fecha_limite' => null],
    ];
@endphp

<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4 p-4">
        <h3 class="fw-bold mb-1">⚙️ Configuración de Convocatorias</h3>
        <p class="text-muted mb-4">Ajusta la fecha límite de preinscripción de cada programa.</p>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Programa</th>
                        <th>Tipo</th>
                        <th style="width: 260px;">Fecha límite de inscripción</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                        <tr>
                            <td>{{ $program['nombre'] }}</td>
                            <td><span class="badge bg-success">{{ $program['tipo'] }}</span></td>
                            <td>
                                <input type="date" value="{{ $program['fecha_limite'] }}" class="form-control form-control-sm">
                            </td>
                            <td>
                                <button class="btn btn-sm text-white" style="background-color:#39A900;" onclick="alert('Guardado disponible próximamente')">
                                    Guardar
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">No hay programas cargados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto mt-3">Volver</a>
    </div>
</div>
@endsection