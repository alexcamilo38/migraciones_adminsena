@extends('layouts.app')

@section('content')
    <h1>Actualizar Profesor</h1>

    <form action="{{ route('course.update', $courses) }}" method="POST">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="course_number" value="{{ old('course_number', $courses->course_number) }}">
        </label>
        <br>

        <label>
            Correo Electrónico:
            <br>
            <input type="date" name="day" value="{{ old('day', $courses->day) }}">
        </label>
        <br>

        <label>
            Área:
            <br>
            <select name="area_id">
                <option value="">Seleccione un área...</option>
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ old('area_id', $courses->area_id) == $area->id ? 'selected' : '' }}>
                        {{ $area->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br>

        <label>
            Centro de Formación:
            <br>
            <select name="training_center_id">
                <option value="">Seleccione un centro...</option>
                @foreach($training_centers as $center)
                    <option value="{{ $center->id }}" {{ old('training_center_id', $courses->training_center_id) == $center->id ? 'selected' : '' }}>
                        {{ $center->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br>
        <br>

        <button type="submit">Actualizar Profesor</button>
    </form>
@endsection