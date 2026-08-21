@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 90vh;">
    <div class="card border-0 shadow-lg overflow-hidden" style="width: 100%; max-width: 1080px; border-radius: 24px;">
        <div class="row g-0">
            
            <!-- COLUMNA IZQUIERDA: Panel Informativo (Pantallas Medianas y Grandes) -->
            <div class="col-lg-5 text-white d-none d-lg-flex flex-column justify-content-between p-5" 
                 style="background: linear-gradient(145deg, #00324d 0%, #001f31 100%);">
                
                <div>
                    <!-- Logo / Identidad -->
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm"
                         style="width: 56px; height: 56px; background-color: rgba(255, 255, 255, 0.12);">
                        <span class="fs-3">🏛️</span>
                    </div>
                    <h3 class="fw-bold mb-1">Admin <span style="color: #39A900;">SENA</span></h3>
                    <p class="small text-white-50">Plataforma Integrada de Gestión Académica</p>
                </div>

                <!-- Puntos Clave Institucionales -->
                <div class="my-auto py-4">
                    <h5 class="fw-bold text-white mb-3">Únete a la plataforma centralizada</h5>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 32px; height: 32px; background-color: rgba(57, 169, 0, 0.2); color: #39A900;">
                            ✓
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold small text-white">Gestión de Fichas y Programas</h6>
                            <p class="mb-0 text-white-50 small">Acceso directo a la administración de convocatorias activas.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 32px; height: 32px; background-color: rgba(57, 169, 0, 0.2); color: #39A900;">
                            ✓
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold small text-white">Seguridad Centralizada</h6>
                            <p class="mb-0 text-white-50 small">Validación por roles para aprendices, instructores y administradores.</p>
                        </div>
                    </div>
                </div>

                
            </div>

            <!-- COLUMNA DERECHA: Formulario Panorámico -->
            <div class="col-lg-7 p-4 p-xl-5 bg-white">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="fw-bold text-dark mb-0 fs-3">Registro de Usuario</h2>
                        <p class="text-muted small mb-0">Completa la información requerida para habilitar tu cuenta.</p>
                    </div>
                    <span class="badge rounded-pill px-3 py-2 fw-semibold d-none d-sm-inline-block" style="background-color: rgba(57, 169, 0, 0.1); color: #39A900;">
                        Portal Oficial
                    </span>
                </div>

                <form method="POST" action="{{ url('/register') }}">
                    @csrf

                    <!-- SECCIÓN: DATOS DE IDENTIFICACIÓN -->
                    <div class="p-3 mb-3 rounded-3" style="background-color: #f8f9fa; border: 1px solid #edf2f7;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="font-size: 0.75rem; color: #00324d; letter-spacing: 0.5px;">
                            1. Identificación Personales
                        </span>

                        <!-- Nombre Completo -->
                        <div class="mb-2">
                            <label for="name" class="form-label fw-semibold text-secondary small mb-1">Nombre Completo</label>
                            <input id="name" type="text" 
                                class="form-control bg-white @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autofocus placeholder="Ej. Carlos Pérez"
                                style="border-radius: 8px; font-size: 0.9rem;">
                            @error('name')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Fila Documento -->
                        <div class="row g-2">
                            <div class="col-md-5">
                                <label for="document_type" class="form-label fw-semibold text-secondary small mb-1">Tipo Doc.</label>
                                <select id="document_type" class="form-select bg-white @error('document_type') is-invalid @enderror" name="document_type" required style="border-radius: 8px; font-size: 0.9rem;">
                                    <option value="" disabled {{ old('document_type') ? '' : 'selected' }}>Seleccionar...</option>
                                    <option value="CC" {{ old('document_type') == 'CC' ? 'selected' : '' }}>C.C. Cédula</option>
                                    <option value="TI" {{ old('document_type') == 'TI' ? 'selected' : '' }}>T.I. Tarjeta Identidad</option>
                                    <option value="CE" {{ old('document_type') == 'CE' ? 'selected' : '' }}>C.E. Extranjería</option>
                                </select>
                                @error('document_type')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="document_number" class="form-label fw-semibold text-secondary small mb-1">N° Documento</label>
                                <input id="document_number" type="text" class="form-control bg-white @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required placeholder="1001234567" style="border-radius: 8px; font-size: 0.9rem;">
                                @error('document_number')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- SECCIÓN: DATOS DE CUENTA Y ROL -->
                    <div class="p-3 mb-3 rounded-3" style="background-color: #f8f9fa; border: 1px solid #edf2f7;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="font-size: 0.75rem; color: #00324d; letter-spacing: 0.5px;">
                            2. Información Académica
                        </span>

                        <div class="mb-2">
                            <label for="email" class="form-label fw-semibold text-secondary small mb-1">Correo Electrónico Institucional</label>
                            <input id="email" type="email" class="form-control bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="ejemplo@sena.edu.co" style="border-radius: 8px; font-size: 0.9rem;">
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="role" class="form-label fw-semibold text-secondary small mb-1">Rol de Usuario</label>
                                <select id="role" class="form-select bg-white @error('role') is-invalid @enderror" name="role" required style="border-radius: 8px; font-size: 0.9rem;">
                                    <option value="" disabled {{ old('role') ? '' : 'selected' }}>Seleccionar...</option>
                                    <option value="estudiante" {{ old('role') == 'estudiante' ? 'selected' : '' }}>Aprendiz</option>
                                    <option value="profesor" {{ old('role') == 'profesor' ? 'selected' : '' }}>Instructor</option>
                                    <option value="administrador" {{ old('role') == 'administrador' ? 'selected' : '' }}>Administrador</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="ficha" class="form-label fw-semibold text-secondary small mb-1">N° Ficha <span class="text-muted fw-normal">(Opcional)</span></label>
                                <input id="ficha" type="text" class="form-control bg-white @error('ficha') is-invalid @enderror" name="ficha" value="{{ old('ficha') }}" placeholder="Ej. 3223899" style="border-radius: 8px; font-size: 0.9rem;">
                            </div>
                        </div>
                    </div>

                    <!-- SECCIÓN: SEGURIDAD -->
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-semibold text-secondary small mb-1">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="••••••••" style="border-radius: 8px; font-size: 0.9rem;">
                            @error('password')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm" class="form-label fw-semibold text-secondary small mb-1">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="••••••••" style="border-radius: 8px; font-size: 0.9rem;">
                        </div>
                    </div>

                    <!-- Checkbox Términos -->
                    <div class="mb-4 form-check">
                        <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" id="terms" required {{ old('terms') ? 'checked' : '' }}>
                        <label class="form-check-label text-muted small" for="terms">
                            Acepto los <a href="#" class="text-decoration-none fw-semibold" style="color: #00324d;">términos de uso</a> y la política de tratamiento de datos.
                        </label>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                        <a href="{{ url('/login') }}" class="btn btn-link text-decoration-none px-0 fw-bold small" style="color: #00324d;">
                            ← Volver al Login
                        </a>
                        <button type="submit" class="btn text-white fw-bold px-4 py-2 shadow-sm" style="background-color: #39A900; border-radius: 10px; font-size: 0.95rem;">
                            Registrar Cuenta
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection