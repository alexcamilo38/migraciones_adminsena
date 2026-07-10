@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center ">

    <h1 class="text-success fw-bold mb-4 text-center">Actualizar Computadores</h1>

    <form action="{{ route('computer.update', $computer) }}" method="POST" class="bg-white p-4 rounded shadow-sm w-100" style="max-width: 450px;">

        @csrf
        @method('put')

        <label class="form-label fw-bold w-100 mb-3">
            Numero:
            <br>
            <input type="text" name="number" value="{{ old('number', $computer->name)}}" class="form-control mt-1">
        </label>
         <br>
        <label class="form-label fw-bold w-100 mb-3">
            Marca:
            <br>
            <input type="text" name="brand"  value="{{ old('brand', $computer->brand)}}" class="form-control mt-1">
        </label>
        <br>
        <br>
        <button type="submit" class="btn btn-success w-100 py-2">Actualizar Computadores</button>
          
    </form>

</div>
@endsection