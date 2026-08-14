@extends('layouts.app')

@section('content')
   <div class="container py-5">
    
    <!-- ENCABEZADO / BANNER -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success display-5">¿Quiénes Somos?</h1>
        <p class="lead text-muted">Conoce la misión y el propósito de nuestro centro de formación e innovación.</p>
        <hr class="w-25 mx-auto text-success border-2">
    </div>

    <!-- SECCIÓN PRINCIPAL: MISION Y VISION -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="fs-1 me-3">🎯</span>
                        <h3 class="card-title fw-bold text-success m-0">Nuestra Misión</h3>
                    </div>
                    <p class="card-text text-secondary">
                        El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral para el desarrollo de la estructura productiva del país.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="fs-1 me-3">🚀</span>
                        <h3 class="card-title fw-bold text-success m-0">Nuestra Visión</h3>
                    </div>
                    <p class="card-text text-secondary">
                        Ser una entidad de clase mundial en formación profesional integral, referente nacional e internacional en innovación, tecnología y aprendizaje continuo, impulsando el talento humano de la región.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETAS DE INFORMACIÓN DEL SISTEMA -->
    <div class="row text-center g-4">
        <div class="col-md-4">
            <div class="p-4 bg-light rounded-3 shadow-sm border">
                <div class="fs-1 text-success mb-2">🏢</div>
                <h5 class="fw-bold">Gestión de Centros</h5>
                <p class="text-muted small">Administración eficiente de sedes, ambientes de aprendizaje y áreas de formación.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-light rounded-3 shadow-sm border">
                <div class="fs-1 text-success mb-2">👨‍🏫</div>
                <h5 class="fw-bold">Talento Instructores</h5>
                <p class="text-muted small">Apoyo a la labor de formación y seguimiento académico de nuestros docentes.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-light rounded-3 shadow-sm border">
                <div class="fs-1 text-success mb-2">💻</div>
                <h5 class="fw-bold">Recursos Tecnológicos</h5>
                <p class="text-muted small">Control e inventario de los equipos de cómputo para el uso de aprendices.</p>
            </div>
        </div>
    </div>

</div>
@endsection
