@extends('layouts.app')

@section('content')
<div class="container my-5">

    <!-- Encabezado de Bienvenida -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
        <div>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill fw-semibold mb-2">
                Panel de Control
            </span>
            <h1 class="fw-bold text-dark h2 mb-1">Bienvenido, Administrador</h1>
            <p class="text-secondary small mb-0">Gestión general del centro de formación y oferta educativa</p>
        </div>
        <div>
            <a href="{{ route('programas.index') }}" class="btn btn-success fw-medium rounded-2 px-3 py-2 shadow-sm">
                + Nuevo Programa
            </a>
        </div>
    </div>

     @include('includes.alerta')

    <!-- Tarjetas de Métricas Rápidas -->
    <div class="row g-3 mb-5">
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold d-block text-uppercase mb-1">Oferta Total</span>
                        <h3 class="fw-bold text-dark mb-0">12</h3>
                    </div>
                    <div class="p-3 bg-success-subtle rounded-3 text-success fs-4">
                        📚
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold d-block text-uppercase mb-1">Convocatorias Activas</span>
                        <h3 class="fw-bold text-dark mb-0">8</h3>
                    </div>
                    <div class="p-3 bg-primary-subtle rounded-3 text-primary fs-4">
                        📢
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold d-block text-uppercase mb-1">Aspirantes Inscritos</span>
                        <h3 class="fw-bold text-dark mb-0">342</h3>
                    </div>
                    <div class="p-3 bg-warning-subtle rounded-3 text-warning-emphasis fs-4">
                        👥
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold d-block text-uppercase mb-1">Cupos Disponibles</span>
                        <h3 class="fw-bold text-dark mb-0">115</h3>
                    </div>
                    <div class="p-3 bg-danger-subtle rounded-3 text-danger fs-4">
                        🎯
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Principal: Tabla de Programas Recientes & Módulos Rápidos -->
    <div class="row g-4">
        
        <!-- Tabla de Programas Recientes -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold text-dark mb-0">Programas Gestionados</h5>
                    <a href="{{ route('programas.index') }}" class="text-success text-decoration-none small fw-semibold">Ver todos →</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr class="small text-secondary">
                                <th>Programa</th>
                                <th>Tipo</th>
                                <th>Duración</th>
                                <th>Estado</th>
                                <th class="text-end">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="small">
                            <tr>
                                <td class="fw-bold text-dark">Análisis y Desarrollo de Software</td>
                                <td><span class="badge bg-light text-dark border">Tecnólogo</span></td>
                                <td>27 Meses</td>
                                <td><span class="badge bg-success-subtle text-success">Activo</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">Producción de Contenidos Digitales</td>
                                <td><span class="badge bg-light text-dark border">Tecnólogo</span></td>
                                <td>24 Meses</td>
                                <td><span class="badge bg-success-subtle text-success">Activo</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark">Contabilización de Operaciones</td>
                                <td><span class="badge bg-light text-dark border">Técnico</span></td>
                                <td>15 Meses</td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Cerrado</span></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Editar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Módulos de Accesos Rápidos -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-3 p-4 bg-white h-100">
                <h5 class="fw-bold text-dark mb-3">Acciones de Gestión</h5>
                
                <div class="d-grid gap-2">
                    <a href="{{ route('programas.index') }}" class="btn btn-outline-success text-start p-3 rounded-3 fw-medium">
                        🌐 <strong>Vista Pública de Ofertas</strong>
                        <span class="d-block small text-muted">Revisar cómo los usuarios ven los programas</span>
                    </a>

                    <button class="btn btn-outline-secondary text-start p-3 rounded-3 fw-medium">
                        📂 <strong>Reporte de Inscritos (Excel/PDF)</strong>
                        <span class="d-block small text-muted">Descargar base de datos de los postulados</span>
                    </button>

                    <button class="btn btn-outline-secondary text-start p-3 rounded-3 fw-medium">
                        ⚙️ <strong>Configuración de Convocatorias</strong>
                        <span class="d-block small text-muted">Ajustar fechas límite de preinscripción</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection