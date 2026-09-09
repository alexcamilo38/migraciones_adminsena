@extends('layouts.app')

@section('content')
@php
    // Datos de ejemplo (simulados), mientras no haya tabla real
    $inscripciones = [
        ['nombre' => 'Carlos Pérez', 'documento' => '1001234567', 'email' => 'carlos@correo.com', 'telefono' => '3001234567', 'programa' => 'Análisis y Desarrollo de Software', 'fecha' => '05/09/2026'],
        ['nombre' => 'María López', 'documento' => '1002345678', 'email' => 'maria@correo.com', 'telefono' => '3009876543', 'programa' => 'Gestión Empresarial', 'fecha' => '06/09/2026'],
        ['nombre' => 'Juan Torres', 'documento' => '1003456789', 'email' => 'juan@correo.com', 'telefono' => null, 'programa' => 'Seguridad de la Información y Redes', 'fecha' => '07/09/2026'],
    ];
@endphp

<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">📂 Reporte de Inscritos</h3>
                <p class="text-muted mb-0">Total: {{ count($inscripciones) }} postulados</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-success" onclick="alert('Exportación disponible próximamente')">Excel</button>
                <button class="btn btn-outline-danger" onclick="alert('Exportación disponible próximamente')">PDF</button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Programa</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($inscripciones as $inscripcion)
                        <tr>
                            <td>{{ $inscripcion['nombre'] }}</td>
                            <td>{{ $inscripcion['documento'] }}</td>
                            <td>{{ $inscripcion['email'] }}</td>
                            <td>{{ $inscripcion['telefono'] ?? '—' }}</td>
                            <td>{{ $inscripcion['programa'] }}</td>
                            <td>{{ $inscripcion['fecha'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">Aún no hay inscritos.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto mt-3">Volver</a>
    </div>
</div>
@endsection