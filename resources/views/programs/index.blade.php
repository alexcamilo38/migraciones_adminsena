@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container-fluid px-4">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <h2 class="fw-bold text-dark mb-1">Listado de Programas</h2>
                <p class="text-muted small mb-0">Visualice, edite o elimine los programas de formación registrados.</p>
            </div>
            <a href="{{ route('programs.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nuevo Programa
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idProgram" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Nombre</th>
                                <th class="py-3">Área</th>
                                <th class="py-3">Tipo</th>
                                <th class="py-3">Duración</th>
                                <th class="py-3">Modalidad</th>
                                <th class="py-3">Descripción</th>
                                <th class="py-3">Imagen</th>
                                <th class="text-center py-3">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($programs as $program)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $program->id }}</td>
                                    <td class="fw-medium text-dark">{{ $program->name }}</td>
                                    <td class="text-secondary fw-medium">{{ $program->area->name ?? 'N/A' }}</td>
                                    <td><span class="badge bg-secondary">{{ $program->type }}</span></td>
                                    <td>{{ $program->duration }}</td>
                                    <td>{{ $program->modality }}</td>
                                    <td class="small text-muted" style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {{ $program->description }}
                                    </td>
                                    <td>
                                        <img
                                            src="{{ asset('storage/images/' . $program->urlFoto) }}"
                                            alt="Imagen del programa"
                                            width="60"
                                            height="60"
                                            style="object-fit: cover; border-radius: 5px;"
                                        >
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                            <a href="{{ route('programs.show', $program->id) }}" 
                                               class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                               style="width: 80px; height: 32px;">
                                                Ver
                                            </a>
                                            
                                            <a href="{{ route('programs.edit', $program->id) }}" 
                                               class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                               style="width: 80px; height: 32px;">
                                                Editar
                                            </a>
                                            
                                            <form action="{{ route('programs.destroy', $program->id) }}" 
                                                  method="POST" 
                                                  class="d-inline-flex m-0" 
                                                  style="width: 80px;"
                                                  onsubmit="return confirm('¿Está completamente seguro de eliminar este programa?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger fw-medium w-100 d-inline-flex justify-content-center align-items-center"
                                                        style="height: 32px;">
                                                    Eliminar
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection