@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTAR AREAS</h1>

    <div class="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('areas.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva Area
                </a>
                <br><br>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td> <td>
                            <a href="{{ route('areas.show', $area->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection