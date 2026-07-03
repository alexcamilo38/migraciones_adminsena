@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE PROFESORES</h1>

    <div class="container">
        <table id="idteacher" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>area_id</th>
                    <th>training_center_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('teacher.registro') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Profesor
                </a>
                <br><br>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td> 
                        <td>{{ $teacher->name}}</td> 
                        <td>{{ $teacher->email}}</td> 
                        <td>{{ $teacher->area_id }}</td>
                        <td>{{ $teacher->training_center_id }}</td>
        
                        <td>
                            <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection