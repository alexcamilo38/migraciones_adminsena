@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 90vh;">
    <div class="card border-0 shadow-lg overflow-hidden" style="width: 100%; max-width: 1080px; border-radius: 24px;">
        <div class="row g-0">
            
            <!-- COLUMNA IZQUIERDA: Panel Informativo del Perfil -->
            <div class="col-lg-5 text-white d-none d-lg-flex flex-column justify-content-between p-5" 
                 style="background: linear-gradient(145deg, #00324d 0%, #001f31 100%);">
                
                <div>
                    <!-- Avatar / Foto de Perfil -->
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm position-relative"
                         style="width: 80px; height: 80px; background-color: rgba(255, 255, 255, 0.12); border: 2px solid #39A900;">
                        <span class="fs-1">👤</span>
                    </div>
                    <h3 class="fw-bold mb-1">{{ Auth::user()->name ?? 'Carlos Pérez' }}</h3>
                    <p class="small text-white-50 mb-0">{{ Auth::user()->email ?? 'carlos.perez@sena.edu.co' }}</p>
                    <span class="badge rounded-pill mt-2 px-3 py-1 fw-semibold" style="background-color: #39A900; color: #ffffff;">
                        {{ ucfirst(Auth::user()->role ?? 'Aprendiz') }}
                    </span>
                </div>

                <!-- Detalle del Rol y Estado -->
                <div class="my-auto py-4">
                    <h5 class="fw-bold text-white mb-3">Estado de la Cuenta</h5>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 32px; height: 32px; background-color: rgba(57, 169, 0, 0.2); color: #39A900;">
                            ✓
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold small text-white">Cuenta Activa</h6>
                            <p class="mb-0 text-white-50 small">Acceso habilitado en la plataforma centralizada.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                             style="width: 32px; height: 32px; background-color: rgba(57, 169, 0, 0.2); color: #39A900;">
                            ✓
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold small text-white">Ficha Asignada</h6>
                            <p class="mb-0 text-white-50 small">Ficha N° {{ Auth::user()->ficha ?? '3223899' }}</p>
                        </div>
                    </div>
                </div>

                

            </div>

            <!-- COLUMNA DERECHA: Formulario Edición de Perfil -->
            <div class="col-lg-7 p-4 p-xl-5 bg-white">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="fw-bold text-dark mb-0 fs-3">Perfil de Usuario</h2>
                        <p class="text-muted small mb-0">Gestiona y actualiza tu información personal</p>
                    </div>
                    <span class="badge rounded-pill px-3 py-2 fw-semibold d-none d-sm-inline-block" style="background-color: rgba(57, 169, 0, 0.1); color: #39A900;">
                        Datos Registrados
                    </span>
                </div>

                <form method="POST" action="{{ url('/profile/update') }}">
                    @csrf
                    @method('PUT')

                    <!-- SECCIÓN 1: DATOS PERSONALES -->
                    <div class="p-3 mb-3 rounded-3" style="background-color: #f8f9fa; border: 1px solid #edf2f7;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="font-size: 0.75rem; color: #00324d; letter-spacing: 0.5px;">
                            1. Identificación Personal
                        </span>

                        <!-- Nombre Completo -->
                        <div class="mb-2">
                            <label for="name" class="form-label fw-semibold text-secondary small mb-1">Nombre Completo</label>
                            <input id="name" type="text" 
                                class="form-control bg-white @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name', Auth::user()->name ?? 'Carlos Pérez') }}" required 
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
                                    <option value="CC" {{ old('document_type', Auth::user()->document_type ?? 'CC') == 'CC' ? 'selected' : '' }}>C.C. Cédula</option>
                                    <option value="TI" {{ old('document_type', Auth::user()->document_type ?? '') == 'TI' ? 'selected' : '' }}>T.I. Tarjeta Identidad</option>
                                    <option value="CE" {{ old('document_type', Auth::user()->document_type ?? '') == 'CE' ? 'selected' : '' }}>C.E. Extranjería</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <label for="document_number" class="form-label fw-semibold text-secondary small mb-1">N° Documento</label>
                                <input id="document_number" type="text" class="form-control bg-white @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number', Auth::user()->document_number ?? '1001234567') }}" required style="border-radius: 8px; font-size: 0.9rem;">
                            </div>
                        </div>
                    </div>

                    <!-- SECCIÓN 2: DATOS ACADÉMICOS -->
                    <div class="p-3 mb-3 rounded-3" style="background-color: #f8f9fa; border: 1px solid #edf2f7;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="font-size: 0.75rem; color: #00324d; letter-spacing: 0.5px;">
                            2. Información Académica
                        </span>

                        <div class="mb-2">
                            <label for="email" class="form-label fw-semibold text-secondary small mb-1">Correo Electrónico Institucional</label>
                            <input id="email" type="email" class="form-control bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email', Auth::user()->email ?? 'carlos.perez@sena.edu.co') }}" required style="border-radius: 8px; font-size: 0.9rem;">
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="role" class="form-label fw-semibold text-secondary small mb-1">Rol de Usuario</label>
                                <select id="role" class="form-select bg-light" name="role" disabled style="border-radius: 8px; font-size: 0.9rem;">
                                    <option value="estudiante" {{ old('role', Auth::user()->role ?? 'estudiante') == 'estudiante' ? 'selected' : '' }}>Aprendiz</option>
                                    <option value="profesor" {{ old('role', Auth::user()->role ?? '') == 'profesor' ? 'selected' : '' }}>Instructor</option>
                                    <option value="administrador" {{ old('role', Auth::user()->role ?? '') == 'administrador' ? 'selected' : '' }}>Administrador</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="ficha" class="form-label fw-semibold text-secondary small mb-1">N° Ficha</label>
                                <input id="ficha" type="text" class="form-control bg-white" name="ficha" value="{{ old('ficha', Auth::user()->ficha ?? '3223899') }}" style="border-radius: 8px; font-size: 0.9rem;">
                            </div>
                        </div>
                    </div>

                    <!-- SECCIÓN 3: CAMBIO DE CONTRASEÑA (OPCIONAL) -->
                    <div class="p-3 mb-3 rounded-3" style="background-color: #f8f9fa; border: 1px solid #edf2f7;">
                        <span class="fw-bold text-uppercase d-block mb-2" style="font-size: 0.75rem; color: #00324d; letter-spacing: 0.5px;">
                            3. Seguridad (Dejar en blanco si no deseas cambiarla)
                        </span>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="password" class="form-label fw-semibold text-secondary small mb-1">Nueva Contraseña</label>
                                <input id="password" type="password" class="form-control bg-white" name="password" placeholder="••••••••" style="border-radius: 8px; font-size: 0.9rem;">
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="form-label fw-semibold text-secondary small mb-1">Confirmar Nueva Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control bg-white" name="password_confirmation" placeholder="••••••••" style="border-radius: 8px; font-size: 0.9rem;">
                            </div>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                        <a href="{{ url('/admin') }}" class="btn btn-link text-decoration-none px-0 fw-bold small" style="color: #00324d;">
                            ← Volver al Panel
                        </a>
                        <button type="submit" class="btn text-white fw-bold px-4 py-2 shadow-sm" style="background-color: #39A900; border-radius: 10px; font-size: 0.95rem;">
                            Guardar Cambios
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection