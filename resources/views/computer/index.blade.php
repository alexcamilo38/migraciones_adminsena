@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE COMPUTADORES</h1>

    <div class="container">
        <table id="idcomputer" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('computer.computador') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo computador
                </a>
                <br><br>
                @foreach ($computer as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td> 
                        <td>{{ $computer->number}}</td> 
                        <td>{{ $computer->brand}}</td> 
                        <td>
                            <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                             <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar computadores</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection