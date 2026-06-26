    @extends('layouts.app')

    @section('content')
        <form action="{{ route('computer.model') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>
                Numero:
                <br>
                <input type="number" name="number">
            </label>
            <br>
            <label>
                Marca:
                <br>
                <input type="text" name="brand">
            </label>
            <br><br>
            <button type="submit">Enviar Formulario</button>
        </form>
    @endsection
