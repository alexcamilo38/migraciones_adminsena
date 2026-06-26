@extends('layouts.app')

@section('content')
    <form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label class="form-label fw-bold">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <button type="submit" >Enviar Formulario</button>
    </form>
   @endsection