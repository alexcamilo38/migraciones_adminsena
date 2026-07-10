@extends('layouts.app')

@section('content')
    <h1>Actualizar Areas</h1>

    <form action="{{ route('areas.update', $areas) }}" method="POST">

        @csrf
        @method('put')



        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $areas->name)}}">
        </label>
        <br><br>
        <button type="submit">Actualizar Area</button>
          <div class="mt-4 text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </div>
    </form>
@endsection