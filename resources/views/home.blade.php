@extends('layouts.app')

@section('content')

    <!-- Carga del CDN de Bootstrap Icons (versión 1.11.3) para el uso de iconografía en toda la vista -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilos CSS personalizados para la vista de inicio/landing page -->
    <style>
        /* Variables globales CSS con la paleta de colores institucionales del SENA */
        :root {
            --sena-green: #39A900;
            /* Verde institucional SENA */
            --sena-green-hover: #2e8800;
            /* Verde más oscuro para estados hover */
            --sena-dark: #0f172a;
            /* Azul muy oscuro/casi negro para fondos contrastantes */
            --sena-accent: #00e676;
            /* Verde brillante de acento */
        }

        /* ESTILOS DEL CARRUSEL HERO (BANNER PRINCIPAL) */
        .hero-carousel .carousel-item {
            height: 650px;
            /* Altura fija para mantener uniformidad en el hero */
            background-color: var(--sena-dark);
            overflow: hidden;
        }

        /* Efecto de zoom suave y transición en las imágenes del carrusel */
        .hero-carousel img {
            height: 100%;
            object-fit: cover;
            transform: scale(1.05);
            transition: transform 6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* Cuando el slide está activo, la imagen se ajusta a su escala normal (efecto ken burns) */
        .hero-carousel .carousel-item.active img {
            transform: scale(1);
        }

        /* Capa de degradado oscuro sobre las imágenes para mejorar la legibilidad del texto */
        .hero-overlay {
            background: linear-gradient(180deg,
                    rgba(15, 23, 42, 0.4) 0%,
                    rgba(15, 23, 42, 0.75) 60%,
                    rgba(15, 23, 42, 0.95) 100%);
        }

        /* TARJETAS GENERALES Y EFECTOS HOVER */
        .sena-card {
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 20px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: #ffffff;
        }

        /* Elevación suave y resalte de borde al pasar el cursor sobre las tarjetas */
        .sena-card:hover,
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08) !important;
            border-color: rgba(57, 169, 0, 0.3) !important;
        }

        .sena-card .card-img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
            height: 200px;
        }

        .sena-card .card-img-top {
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        /* Zoom de la imagen interna de la tarjeta en hover */
        .sena-card:hover .card-img-top {
            transform: scale(1.08);
        }

        /* ESTILOS DE BOTONES PERSONALIZADOS */
        /* Botón verde principal del SENA con sombra */
        .btn-sena-primary {
            background-color: var(--sena-green) !important;
            color: #ffffff !important;
            border: none !important;
            box-shadow: 0 4px 15px rgba(57, 169, 0, 0.3);
            transition: all 0.3s ease;
        }

        .btn-sena-primary:hover {
            background-color: var(--sena-green-hover) !important;
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(57, 169, 0, 0.5);
        }

        /* Botón con efecto traslúcido (Glassmorphism) */
        .btn-glass {
            background: rgba(255, 255, 255, 0.2) !important;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5) !important;
            color: #ffffff !important;
            transition: all 0.3s ease;
        }

        .btn-glass:hover {
            background: #ffffff !important;
            color: #0f172a !important;
            transform: translateY(-2px);
        }

        .btn-glass:hover i {
            color: #0f172a !important;
        }

        /* BADGES (ETIQUETAS) Y CONTROLES DEL CARRUSEL HERO */
        .badge-sena-tag {
            background: rgba(57, 169, 0, 0.15);
            color: #ffffff;
            border: 1px solid rgba(57, 169, 0, 0.4);
            font-weight: 600;
        }

        .badge-type {
            backdrop-filter: blur(8px);
            background: rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Botones redondos de navegación anterior/siguiente del carrusel Hero */
        .carousel-control-btn {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .carousel-control-btn:hover {
            background: var(--sena-green);
            border-color: var(--sena-green);
            transform: scale(1.1);
        }

        /* ESTILOS DE LA SECCIÓN DE ANUNCIOS Y NOVEDADES */
        .announcements-section {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }

        .announcement-card {
            border-radius: 20px;
            overflow: hidden;
        }

        /* Zona visual/multimedia: fija la altura para uniformidad independientemente de si hay imagen o no */
        .announcement-media {
            height: 180px;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--sena-green) 0%, #1f6b00 100%);
        }

        .announcement-media img {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.6s ease;
        }

        .announcement-card:hover .announcement-media img {
            transform: scale(1.06);
        }

        /* Icono por defecto cuando el anuncio NO contiene imagen adjunta */
        .announcement-media .placeholder-icon {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.35);
        }

        /* Truncado de texto mediante líneas fijas (-webkit-line-clamp) para igualar alturas */
        .announcement-text,
        .announcement-title {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .announcement-text {
            -webkit-line-clamp: 3;
        }

        /* Corta a 3 líneas */
        .announcement-title {
            -webkit-line-clamp: 2;
        }

        /* Corta a 2 líneas */

        /* SLIDER HORIZONTAL DE ANUNCIOS */
        .announcements-slider {
            position: relative;
        }

        /* Pista deslizante con scroll horizontal y alineación rápida (scroll-snap) */
        .announcements-track {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            padding: 14px 4px 28px;
            /* Espacio extra para hover y sombras */
            scrollbar-width: none;
            /* Oculta scrollbar en Firefox */
            -webkit-overflow-scrolling: touch;
        }

        .announcements-track::-webkit-scrollbar {
            display: none;
        }

        /* Oculta scrollbar en Chrome/Safari */

        /* Distribución responsiva de ítems en la pista */
        .announcement-slide {
            display: flex;
            flex: 0 0 calc((100% - 3rem) / 3);
            /* Muestra 3 tarjetas en pantallas grandes */
            scroll-snap-align: start;
        }

        @media (max-width: 991.98px) {
            .announcement-slide {
                flex-basis: calc((100% - 1.5rem) / 2);
            }
        }

        /* 2 en tablets */
        @media (max-width: 575.98px) {
            .announcement-slide {
                flex-basis: 100%;
            }
        }

        /* 1 en móviles */

        /* Flechas de navegación para el slider de anuncios */
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: none;
            background: var(--sena-green);
            color: #fff;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 18px rgba(57, 169, 0, 0.4);
            transition: background 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
        }

        .slider-arrow:hover:not(:disabled) {
            background: var(--sena-green-hover);
            transform: translateY(-50%) scale(1.08);
        }

        .slider-arrow:disabled {
            opacity: 0.35;
            cursor: default;
            box-shadow: none;
        }

        .slider-arrow:focus-visible {
            outline: 3px solid var(--sena-dark);
            outline-offset: 2px;
        }

        .slider-arrow.prev {
            left: -23px;
        }

        .slider-arrow.next {
            right: -23px;
        }

        @media (max-width: 767.98px) {
            .slider-arrow.prev {
                left: 2px;
            }

            .slider-arrow.next {
                right: 2px;
            }
        }

        .slider-arrow[hidden] {
            display: none;
        }
    </style>

    <!-- Contenedor fluido sin padding horizontal para el Hero -->
    <div class="container-fluid px-0">

        <!-- 🚀 CARRUSEL HERO PRINCIPAL -->
        <div id="senaHeroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel">

            <!-- Indicadores en la parte inferior del carrusel -->
            <div class="carousel-indicators mb-4">
                <button type="button" data-bs-target="#senaHeroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#senaHeroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#senaHeroCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#senaHeroCarousel" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">

                <!-- SLIDE 1: Presentación General de ADMIN SENA -->
                <div class="carousel-item active" data-bs-interval="6000">
                    <div class="position-relative h-100">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1600"
                            class="d-block w-100" alt="ADMIN SENA">
                        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100 pb-0 text-start"
                        style="top:0; bottom:0;">
                        <div class="container">
                            <div class="col-xl-7 col-lg-8">
                                <span
                                    class="badge badge-sena-tag px-3 py-2 rounded-pill mb-3 text-uppercase d-inline-flex align-items-center">
                                    <i class="bi bi-shield-check me-2 text-white"></i> Gestión Académica Integral
                                </span>
                                <h1 class="display-3 fw-extrabold text-white mb-3">
                                    ADMIN <span style="color: var(--sena-accent);">SENA</span>
                                </h1>
                                <p class="lead text-light mb-4 opacity-90 fs-5 fw-normal">
                                    Tu portal centralizado para la administración de ambientes de formación, aprendices,
                                    instructores e infraestructura del centro.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="#ofertas"
                                        class="btn btn-glass btn-lg px-4 py-3 rounded-4 fw-semibold text-white">
                                        <i class="bi bi-journal-text me-2 text-white"></i> Ver Oferta Educativa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2: Innovación e Infraestructura Tecnológica -->
                <div class="carousel-item" data-bs-interval="6000">
                    <div class="position-relative h-100">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1600"
                            class="d-block w-100" alt="Innovación Tecnológica">
                        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100 pb-0 text-start"
                        style="top:0; bottom:0;">
                        <div class="container">
                            <div class="col-xl-7 col-lg-8">
                                <span
                                    class="badge badge-sena-tag px-3 py-2 rounded-pill mb-3 text-uppercase d-inline-flex align-items-center">
                                    <i class="bi bi-cpu me-2 text-white"></i> Infraestructura de Vanguardia
                                </span>
                                <h1 class="display-3 fw-extrabold text-white mb-3">
                                    Innovación y <span style="color: var(--sena-accent);">Tecnología</span>
                                </h1>
                                <p class="lead text-light mb-4 opacity-90 fs-5 fw-normal">
                                    Control en tiempo real del inventario tecnológico, mantenimiento de equipos de cómputo y
                                    ambientes especializados.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="/computer/list"
                                        class="btn btn-sena-primary btn-lg px-4 py-3 rounded-4 fw-bold text-white">
                                        <i class="bi bi-laptop me-2 text-white"></i> Gestionar Equipos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3: Comunidad Académica y Aprendices -->
                <div class="carousel-item" data-bs-interval="6000">
                    <div class="position-relative h-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1600"
                            class="d-block w-100" alt="Formación Profesional">
                        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100 pb-0 text-start"
                        style="top:0; bottom:0;">
                        <div class="container">
                            <div class="col-xl-7 col-lg-8">
                                <span
                                    class="badge badge-sena-tag px-3 py-2 rounded-pill mb-3 text-uppercase d-inline-flex align-items-center">
                                    <i class="bi bi-mortarboard me-2 text-white"></i> Talento Humano SENA
                                </span>
                                <h1 class="display-3 fw-extrabold text-white mb-3">
                                    Comunidad <span style="color: var(--sena-accent);">Académica</span>
                                </h1>
                                <p class="lead text-light mb-4 opacity-90 fs-5 fw-normal">
                                    Organiza fichas de formación, realiza seguimiento a los aprendices y gestiona los
                                    horarios de instrucción.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="/apprentice/list"
                                        class="btn btn-sena-primary btn-lg px-4 py-3 rounded-4 fw-bold text-white">
                                        <i class="bi bi-people me-2 text-white"></i> Módulo Aprendices
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 4: Organización Institucional y Áreas -->
                <div class="carousel-item" data-bs-interval="6000">
                    <div class="position-relative h-100">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1600"
                            class="d-block w-100" alt="Centro de Formación">
                        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100 pb-0 text-start"
                        style="top:0; bottom:0;">
                        <div class="container">
                            <div class="col-xl-7 col-lg-8">
                                <span
                                    class="badge badge-sena-tag px-3 py-2 rounded-pill mb-3 text-uppercase d-inline-flex align-items-center">
                                    <i class="bi bi-building-gear me-2 text-white"></i> Organización Institucional
                                </span>
                                <h1 class="display-3 fw-extrabold text-white mb-3">
                                    Centro de <span style="color: var(--sena-accent);">Formación</span>
                                </h1>
                                <p class="lead text-light mb-4 opacity-90 fs-5 fw-normal">
                                    Estructura las áreas de coordinación, programas académicos y espacios físicos de
                                    aprendizaje.
                                </p>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="/areas/list"
                                        class="btn btn-sena-primary btn-lg px-4 py-3 rounded-4 fw-bold text-white">
                                        <i class="bi bi-grid-3x3-gap me-2 text-white"></i> Explorar Áreas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botones de control lateral (Anterior/Siguiente) del carrusel -->
            <button class="carousel-control-prev w-auto ms-lg-4 ms-2" type="button" data-bs-target="#senaHeroCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-btn text-white">
                    <i class="bi bi-chevron-left fs-4"></i>
                </span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next w-auto me-lg-4 me-2" type="button" data-bs-target="#senaHeroCarousel"
                data-bs-slide="next">
                <span class="carousel-control-btn text-white">
                    <i class="bi bi-chevron-right fs-4"></i>
                </span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

    </div>

    <!-- 🎓 SECCIÓN DE OFERTAS EDUCATIVAS DESTACADAS -->
    <div id="ofertas" class="container py-5 my-3">

        <div class="text-center mb-5">
            <span class="badge badge-sena-tag px-3 py-2 rounded-pill mb-2 text-uppercase text-dark">
                <i class="bi bi-stars me-1 text-success"></i> Inscripciones Abiertas
            </span>
            <h2 class="fw-bold text-dark display-6 mb-2">Oferta Educativa Destacada</h2>
            <p class="text-muted mx-auto fs-6" style="max-width: 650px;">
                Descubre los programas de formación técnica y tecnológica diseñados para impulsar tu perfil profesional.
            </p>
        </div>

        <!-- TARJETAS DE PROGRAMAS DESTACADOS -->
        <div class="row g-4">

            <!-- Programa 1: ADSO -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 sena-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800"
                            class="card-img-top" alt="ADSO">
                        <span
                            class="badge badge-type text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fs-7">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark mb-2">Análisis y Desarrollo de Software</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Diseña, desarrolla e implementa soluciones
                            de software web y móviles utilizando tecnologías y bases de datos modernas.</p>

                        <div class="bg-light p-3 rounded-3 mb-4">
                            <div class="d-flex align-items-center mb-2 text-secondary small">
                                <i class="bi bi-clock-history text-success fs-5 me-2"></i>
                                <span><strong>Duración:</strong> 27 Meses</span>
                            </div>
                            <div class="d-flex align-items-center text-secondary small">
                                <i class="bi bi-laptop text-success fs-5 me-2"></i>
                                <span><strong>Modalidad:</strong> Presencial / Virtual</span>
                            </div>
                        </div>

                        <a href="{{ route('programas.show', 1) }}"
                            class="btn btn-sena-primary w-100 rounded-3 fw-bold py-2 text-white">
                            Ver Detalles <i class="bi bi-arrow-right ms-1 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Programa 2: Sistemas y Mantenimiento -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 sena-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=800"
                            class="card-img-top" alt="Redes">
                        <span
                            class="badge badge-type text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fs-7">Técnico</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark mb-2">Sistemas y Mantenimiento</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Especialízate en ensamble de computadores,
                            diagnóstico de hardware, mantenimiento preventivo y cableado estructurado.</p>

                        <div class="bg-light p-3 rounded-3 mb-4">
                            <div class="d-flex align-items-center mb-2 text-secondary small">
                                <i class="bi bi-clock-history text-success fs-5 me-2"></i>
                                <span><strong>Duración:</strong> 15 Meses</span>
                            </div>
                            <div class="d-flex align-items-center text-secondary small">
                                <i class="bi bi-geo-alt text-success fs-5 me-2"></i>
                                <span><strong>Modalidad:</strong> Presencial</span>
                            </div>
                        </div>

                        <a href="{{ route('programas.show', 2) }}"
                            class="btn btn-sena-primary w-100 rounded-3 fw-bold py-2 text-white">
                            Ver Detalles <i class="bi bi-arrow-right ms-1 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Programa 3: Gestión Empresarial -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 sena-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800"
                            class="card-img-top" alt="Gestión Empresarial">
                        <span
                            class="badge badge-type text-white position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill fs-7">Tecnólogo</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark mb-2">Gestión Empresarial</h5>
                        <p class="card-text text-muted small mb-4 flex-grow-1">Adquiere competencias en formulación de
                            proyectos, administración financiera, talento humano y procesos estratégicos.</p>

                        <div class="bg-light p-3 rounded-3 mb-4">
                            <div class="d-flex align-items-center mb-2 text-secondary small">
                                <i class="bi bi-clock-history text-success fs-5 me-2"></i>
                                <span><strong>Duración:</strong> 24 Meses</span>
                            </div>
                            <div class="d-flex align-items-center text-secondary small">
                                <i class="bi bi-wifi text-success fs-5 me-2"></i>
                                <span><strong>Modalidad:</strong> Virtual</span>
                            </div>
                        </div>

                        <a href="{{ route('programas.show', 3) }}"
                            class="btn btn-sena-primary w-100 rounded-3 fw-bold py-2 text-white">
                            Ver Detalles <i class="bi bi-arrow-right ms-1 text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- BOTÓN PARA VER EL CATÁLOGO COMPLETO -->
        <div class="text-center mt-5">
            <a href="{{ route('programas.index') }}"
                class="btn btn-sena-primary rounded-pill px-5 py-3 fw-bold text-white">
                Ver Catálogo Completo de Programas <i class="bi bi-arrow-right ms-2 fs-5 align-middle text-white"></i>
            </a>
        </div>

    </div>

    <!-- 📢 SECCIÓN DINÁMICA DE ANUNCIOS SENA (SLIDER CON NAVEGACIÓN) -->
    <section id="anuncios" class="announcements-section py-5">
        <div class="container py-3">

            <div class="text-center mb-5">
                <span class="badge badge-sena-tag px-3 py-2 rounded-pill mb-2 text-uppercase text-dark">
                    <i class="bi bi-megaphone me-1 text-success"></i> Novedades Institucionales
                </span>
                <h2 class="fw-bold text-dark display-6 mb-2">Anuncios SENA</h2>
                <p class="text-muted mx-auto fs-6" style="max-width: 650px;">
                    Mantente informado con los comunicados y avisos oficiales publicados por el centro.
                </p>
            </div>

            {{-- Lógica Blade: Ordena la colección $announcements por fecha de publicación descendente --}}
            @php $latest = $announcements->sortByDesc('publish_date')->values(); @endphp

            {{-- Comprueba si la colección de anuncios está vacía --}}
            @if ($latest->isEmpty())
                <div class="text-center py-4">
                    <div class="p-4 bg-white rounded-4 d-inline-block shadow-sm">
                        <i class="bi bi-info-circle fs-1 text-muted d-block mb-2"></i>
                        <p class="text-muted mb-0">No hay anuncios publicados por el momento.</p>
                    </div>
                </div>
            @else
                <!-- Slider dinámico cuando existen anuncios -->
                <div class="announcements-slider" id="announcementsSlider">

                    <!-- Botón de navegación izquierda (Anterior) -->
                    <button type="button" class="slider-arrow prev" aria-label="Anuncios anteriores" disabled hidden>
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <!-- Pista deslizable con las tarjetas de anuncios -->
                    <div class="announcements-track" tabindex="0" aria-label="Lista de anuncios">
                        @foreach ($latest as $item)
                            @php
                                // Verificación y construcción de la ruta de imagen almacenada
                                $hasImage = !empty($item->urlFoto);
                                $imgUrl = $hasImage
                                    ? (Str::startsWith($item->urlFoto, 'images/')
                                        ? asset('storage/' . $item->urlFoto)
                                        : asset('storage/images/' . $item->urlFoto))
                                    : null;

                                // Formato de fecha en español
                                $date = \Carbon\Carbon::parse($item->publish_date)->translatedFormat('d M Y');

                                // Determina si el texto supera los 110 caracteres para mostrar botón "Leer más"
                                $isLong = Str::length($item->content) > 110;
                            @endphp

                            <div class="announcement-slide">
                                <article class="card h-100 w-100 border-0 shadow-sm sena-card announcement-card">

                                    <!-- Cabecera visual del anuncio (Imagen o icono placeholder) -->
                                    <div class="announcement-media">
                                        <span class="placeholder-icon"><i class="bi bi-megaphone-fill"></i></span>
                                        @if ($hasImage)
                                            <img src="{{ $imgUrl }}" alt="{{ $item->title }}" loading="lazy"
                                                onerror="this.remove()">
                                        @endif
                                    </div>

                                    <!-- Cuerpo de la tarjeta del anuncio -->
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div
                                            class="d-flex align-items-center justify-content-between text-muted small mb-3">
                                            <span
                                                class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1">
                                                {{ $hasImage ? 'Anuncio' : 'Comunicado' }}
                                            </span>
                                            <span><i class="bi bi-calendar3 me-1"></i>{{ $date }}</span>
                                        </div>

                                        <h5 class="announcement-title text-capitalize fw-bold text-dark mb-2">
                                            {{ $item->title }}</h5>
                                        <p class="announcement-text text-secondary small mb-3">{{ $item->content }}</p>

                                        <!-- Disparador del Modal si el contenido es extenso -->
                                        <div class="mt-auto">
                                            @if ($isLong)
                                                <button type="button"
                                                    class="btn btn-link text-success fw-semibold p-0 text-decoration-none"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#announcementModal{{ $item->id }}">
                                                    Leer más <i class="bi bi-arrow-right ms-1"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <!-- Botón de navegación derecha (Siguiente) -->
                    <button type="button" class="slider-arrow next" aria-label="Más anuncios" hidden>
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                {{-- Modales de Bootstrap para visualizar el contenido completo de cada anuncio --}}
                @foreach ($latest as $item)
                    @php
                        $hasImage = !empty($item->urlFoto);
                        $imgUrl = $hasImage
                            ? (Str::startsWith($item->urlFoto, 'images/')
                                ? asset('storage/' . $item->urlFoto)
                                : asset('storage/images/' . $item->urlFoto))
                            : null;
                        $date = \Carbon\Carbon::parse($item->publish_date)->translatedFormat('d M Y');
                    @endphp
                    <div class="modal fade" id="announcementModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="announcementModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content border-0 rounded-4 overflow-hidden">
                                @if ($hasImage)
                                    <img src="{{ $imgUrl }}" alt="{{ $item->title }}" class="w-100"
                                        style="max-height: 260px; object-fit: cover;" onerror="this.remove()">
                                @endif
                                <div class="modal-header border-0 pb-0">
                                    <div>
                                        <small class="text-muted d-block mb-1"><i
                                                class="bi bi-calendar3 me-1"></i>{{ $date }}</small>
                                        <h5 class="modal-title fw-bold text-capitalize"
                                            id="announcementModalLabel{{ $item->id }}">{{ $item->title }}</h5>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body text-secondary">{!! nl2br(e($item->content)) !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </section>

    <!-- SCRIPT JAVASCRIPT PARA EL CONTROL Y DESPLAZAMIENTO DEL SLIDER DE ANUNCIOS -->
    <script>
        // IIFE para aislar el scope de la funcionalidad del slider
        (function() {
            const slider = document.getElementById('announcementsSlider');
            if (!slider) return;

            const track = slider.querySelector('.announcements-track');
            const prev = slider.querySelector('.slider-arrow.prev');
            const next = slider.querySelector('.slider-arrow.next');

            // Calcula el ancho de avance individual por tarjeta (ancho + gap entre items)
            function step() {
                const slide = track.querySelector('.announcement-slide');
                const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
                return slide.offsetWidth + gap;
            }

            // Actualiza el estado de visibilidad y deshabilitación de las flechas
            function update() {
                const hasOverflow = track.scrollWidth > track.clientWidth + 2;
                prev.hidden = next.hidden = !hasOverflow; // Muestra flechas solo si hay desbordamiento horizontal
                prev.disabled = track.scrollLeft <= 2; // Deshabilita "prev" al llegar al inicio
                next.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth -
                2; // Deshabilita "next" al llegar al final
            }

            // Event listeners para los botones de desplazamiento suave
            prev.addEventListener('click', () => track.scrollBy({
                left: -step(),
                behavior: 'smooth'
            }));
            next.addEventListener('click', () => track.scrollBy({
                left: step(),
                behavior: 'smooth'
            }));

            // Escuchadores para recalculación al hacer scroll o redimensionar pantalla
            track.addEventListener('scroll', update, {
                passive: true
            });
            window.addEventListener('resize', update);
            window.addEventListener('load', update);
            update();
        })();
    </script>
@endsection
