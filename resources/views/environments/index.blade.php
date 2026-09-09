@extends('layouts.app') 

@section('content') 

<div class="py-4"> 
    <div class="container-fluid px-4"> 
         
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3"> 
            <div> 
                <h2 class="fw-bold text-dark mb-1">Listado de Ambientes</h2> 
                <p class="text-muted small mb-0">Visualice, edite o elimine los ambientes de formación registrados.</p> 
            </div> 
             
            <a href="{{ route('environments.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;"> 
                Nuevo Ambiente 
            </a> 
        </div> 

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden"> 
            <div class="card-body p-0"> 
                <div class="table-responsive"> 
                     
                    <table id="idEnvironment" class="table table-hover align-middle mb-0" style="width:100%"> 
                        <thead class="table-dark" style="background-color: #212529;"> 
                            <tr> 
                                <th class="ps-4 py-3">ID</th> 
                                <th class="py-3">Nombre</th> 
                                <th class="py-3">Ubicación</th> 
                                <th class="py-3">Centro de Formación</th> 
                                <th class="py-3">Imagen</th> 
                                <th class="text-center py-3">Acciones de Gestión</th> 
                            </tr> 
                        </thead> 
                         
                        <tbody> 
                            @foreach ($environments as $environment) 
                                <tr> 
                                    <td class="ps-4 fw-bold text-secondary">
                                        #{{ $environment->id }}
                                    </td> 

                                    <td class="fw-medium text-dark">
                                        {{ $environment->name }}
                                    </td> 

                                    <td class="text-secondary fw-medium">
                                        {{ $environment->location }}
                                    </td> 

                                    <td class="text-secondary fw-medium">
                                        {{ $environment->training_center->name ?? 'N/A' }}
                                    </td> 
                                     
                                    <td>
                                        <img
                                            src="{{ asset('storage/images/' . $environment->urlFoto) }}"
                                            alt="Imagen del ambiente"
                                            width="60"
                                            height="60"
                                            style="object-fit: cover; border-radius: 5px;"
                                        >
                                    </td>

                                    <td class="text-center"> 
                                        <div class="d-flex justify-content-center align-items-center gap-2"> 
                                             
                                            <a href="{{ route('environments.show', $environment->id) }}"  
                                               class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center"  
                                               style="width: 80px; height: 32px;"> 
                                                Ver 
                                            </a> 
                                             
                                            <a href="{{ route('environments.edit', $environment->id) }}"  
                                               class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center"  
                                               style="width: 80px; height: 32px;"> 
                                                Editar 
                                            </a> 
                                             
                                            <form action="{{ route('environments.destroy', $environment->id) }}"  
                                                  method="POST"  
                                                  class="d-inline-flex m-0"  
                                                  style="width: 80px;"
                                                  onsubmit="return confirm('¿Está completamente seguro de eliminar este ambiente?')"> 
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