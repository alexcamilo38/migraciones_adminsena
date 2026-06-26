    
@extends('layouts.app')

@section('content')

    <form action="{{ route('teacher.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            email:
            <br>
            <input type="email" name="email">
        </label>
        <label for="area_id">Usuario</label>

        <select name="area_id" id="area_id" class="form-control">
            <option value="">Seleccione una area</option>

            @foreach ($areas as $area)
                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>
            @endforeach
        </select>

        <select name="training_center_id">

             <option value="">Seleccione un centro de formación</option>
            @foreach ($training_centers as $training)
                <option value="{{ $training->id }}">
                    {{ $training->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
    </form>
    @endsection
