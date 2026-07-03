@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">LISTA DE CURSOS</h1>

    <div class="container">
        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero de curso</th>
                    <th>dia</th>
                    <th>area_id</th>
                    <th>training_center_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <a href="{{ route('course.registro') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo curso
                </a>
                <br><br>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td> 
                        <td>{{ $course->course_number}}</td> 
                        <td>{{ $course->day}}</td> 
                        <td>{{ $course->area_id }}</td>
                        <td>{{ $course->training_center_id }}</td>
        
                        <td>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-sm">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection