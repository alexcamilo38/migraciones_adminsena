@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE CENTROS</h1>

    <div class="container">
        <table id="idcomputer" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('trainingcenters.registrar') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Centros
                </a>
                <br><br>
                @foreach ($Training_centers as $Training_center)
                    <tr>
                        <td>{{ $Training_center->id }}</td> 
                        <td>{{ $Training_center->name}}</td> 
                        <td>{{ $Training_center->location	}}</td> 
                        <td>
                            <a href="{{ route('trainingcenters.show', $Training_center->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                            <a href="{{ route('trainingcenters.edit', $Training_center->id) }}"class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('trainingcenters.destroy', $Training_center->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar Centro de formacion:</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection