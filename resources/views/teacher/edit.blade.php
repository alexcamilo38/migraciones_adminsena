@extends('layouts.app')

@section('content')
    <h1>Actualizar Profesor</h1>

    <form action="{{ route('teacher.update', $teachers) }}" method="POST">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $teachers->name) }}">
        </label>
        <br>

        <label>
            Correo Electrónico:
            <br>
            <input type="email" name="email" value="{{ old('email', $teachers->email) }}">
        </label>
        <br>

        <label>
            Área:
            <br>
            <select name="area_id">
                <option value="">Seleccione un área...</option>
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ old('area_id', $teachers->area_id) == $area->id ? 'selected' : '' }}>
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
                    <option value="{{ $center->id }}" {{ old('training_center_id', $teachers->training_center_id) == $center->id ? 'selected' : '' }}>
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