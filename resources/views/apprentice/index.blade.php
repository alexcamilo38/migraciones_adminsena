@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE APRENDICES</h1>

    <div class="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Numero de Celular</th>
                    <th>course_id</th>
                    <th>computer_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('apprentice.registro') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Aprendis
                </a>
                <br><br>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice->id }}</td> 
                        <td>{{ $apprentice->name}}</td> 
                        <td>{{ $apprentice->email}}</td> 
                        <td>{{ $apprentice->cell_number}}</td> 
                        <td>{{ $apprentice->computer_id }}</td>
                        <td>{{ $apprentice->computer_id }}</td>
        
                        <td>
                            <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                            <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar Aprendis</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection