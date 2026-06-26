@extends('layouts.app')

@section('content')
    <form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
    </form>
   @endsection