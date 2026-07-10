@extends('layouts.app')

@section('content')
    <h1>Actualizar Centros de formacion</h1>

    <form action="{{ route('trainingcenters.update', $Training_centers) }}" method="POST">

        @csrf
        @method('put')



        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $Training_centers->name)}}">
        </label>
         <br>
        <label>
            Ubicacion:
            <br>
            <input type="text" name="location"  value="{{ old('location', $Training_centers->location)}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Centros de formacion</button>
          
    </form>
@endsection