@extends('layouts.app')

@section('content')
    <div class="container-fluid px-0">

        <!-- CARRUSEL -->
        <div id="senaCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#senaCarousel" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">

                <!-- IMAGEN 1 BIENVENIDA -->
                <div class="carousel-item active">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72" class="d-block w-100" style="height:650px; object-fit:cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.60);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1>ADMIN SENA</h1>
                        <p>Bienvenido al sistema de gestión académica</p>
                        <a href="/admin" class="btn btn-success btn-lg px-5">Comenzar</a>
                    </div>
                </div>

                <!-- IMAGEN 2 TECNOLOGIA -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" class="d-block w-100" style="height:650px; object-fit:cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1>Innovación Tecnológica</h1>
                        <p>Gestiona ambientes y equipos del centro SENA</p>
                        <a href="/computer/list" class="btn btn-light btn-lg px-5">Ver Equipos</a>
                    </div>
                </div>

                <!-- IMAGEN 3 APRENDICES -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="d-block w-100" style="height:650px; object-fit:cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h1>Formación Profesional</h1>
                        <p>Administra aprendices e instructores fácilmente</p>
                        <a href="/apprentice/list" class="btn btn-success btn-lg px-5">Aprendices</a>
                    </div>
                </div>

                <!-- IMAGEN 4 CENTRO -->
                <div class="carousel-item">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2" class="d-block w-100" style="height:650px; object-fit:cover;"> 
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div> 
                    </div> 
                    <div class="carousel-caption"> 
                        <h1>Centro de Formación</h1> 
                        <p>Organiza áreas, programas y procesos académicos</p> 
                        <a href="/areas/list" class="btn btn-light btn-lg px-5">Explorar</a> 
                    </div> 
                </div> 

            </div> 

            <button class="carousel-control-prev" type="button" data-bs-target="#senaCarousel" data-bs-slide="prev"> 
                <span class="carousel-control-prev-icon"></span> 
            </button> 

            <button class="carousel-control-next" type="button" data-bs-target="#senaCarousel" data-bs-slide="next"> 
                <span class="carousel-control-next-icon"></span> 
            </button> 
        </div> 

    </div> 

    <!-- 🎓 SECCIÓN DE 6 OFERTAS EDUCATIVAS -->
    <div class="container py-5">
        
        <div class="text-center mb-5">
            <span class="badge bg-success px-3 py-2 fs-6 mb-2">Convocatorias Abiertas</span>
            <h2 class="fw-bold text-dark display-6">Oferta Educativa Destacada</h2>
            <p class="text-muted">Descubre los programas de formación técnica y tecnológica disponibles en nuestro centro</p>
            <hr class="w-25 mx-auto text-success border-2">
        </div>

        <div class="row g-4">

            <!-- OFERTA 1: ADSO -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" class="card-img-top" style="height:200px; object-fit:cover;" alt="ADSO">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Análisis y Desarrollo de Software</h5>
                        <p class="card-text text-muted small flex-grow-1">Aprende a construir aplicaciones web, móviles y sistemas de software utilizando lenguajes modernos y bases de datos.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 27 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Presencial / Virtual</li>
                        </ul>
                        <a href="{{ route('programas.show', 1) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- OFERTA 2: REDES Y MANTENIMIENTO -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8" class="card-img-top" style="height:200px; object-fit:cover;" alt="Redes">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Técnico</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Sistemas y Mantenimiento de Equipos</h5>
                        <p class="card-text text-muted small flex-grow-1">Especialízate en ensamble de computadores, diagnóstico de hardware y cableado estructurado para redes de datos.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 15 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <a href="{{ route('programas.show', 2) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- OFERTA 3: GESTIÓN EMPRESARIAL -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" class="card-img-top" style="height:200px; object-fit:cover;" alt="Gestión Empresarial">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Gestión Empresarial</h5>
                        <p class="card-text text-muted small flex-grow-1">Adquiere conocimientos en administración de proyectos, finanzas, talento humano y procesos organizacionales.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 24 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Virtual</li>
                        </ul>
                        <a href="{{ route('programas.show', 3) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- OFERTA 4: DISEÑO GRÁFICO Y MULTIMEDIA -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d" class="card-img-top" style="height:200px; object-fit:cover;" alt="Diseño Multimedia">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Producción de Contenidos Digitales</h5>
                        <p class="card-text text-muted small flex-grow-1">Crea contenido interactivo, animación 2D/3D, edición de video y diseño de interfaces de usuario (UI/UX).</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 24 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <a href="{{ route('programas.show', 4) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- OFERTA 5: CONTABILIDAD Y FINANZAS -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="card-img-top" style="height:200px; object-fit:cover;" alt="Contabilidad">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Técnico</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Contabilización de Operaciones</h5>
                        <p class="card-text text-muted small flex-grow-1">Aprende sobre gestión financiera, nómina, tributaria e impuestos en plataformas contables empresariales.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 15 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Virtual / Presencial</li>
                        </ul>
                        <a href="{{ route('programas.show', 5) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- OFERTA 6: SEGURIDAD DE LA INFORMACIÓN / CIBERSEGURIDAD -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" class="card-img-top" style="height:200px; object-fit:cover;" alt="Ciberseguridad">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 shadow-sm">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">Seguridad de la Información y Redes</h5>
                        <p class="card-text text-muted small flex-grow-1">Protege datos corporativos, previene vulnerabilidades digitales y administra firewalls e infraestructura informática.</p>
                        <ul class="list-unstyled text-secondary small mb-3">
                            <li>⏱️ <strong>Duración:</strong> 27 Meses</li>
                            <li>📍 <strong>Modalidad:</strong> Presencial</li>
                        </ul>
                        <a href="{{ route('programas.show', 6) }}" class="btn btn-outline-success w-100 fw-bold">Ver Detalles</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Botón Ver Más -->
        <div class="text-center mt-5">
            <a href="{{ route('programas.index') }}" class="btn btn-success btn-lg px-5 shadow-sm fw-bold">
                Ver Todas las Ofertas
            </a>
        </div>

    </div>
@endsection