<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('teacher.admin')}}" method="POST" enctype="multipart/form-data">
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
            <option value="">Seleccione un usuario</option>

            @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
    </form>
</body>

</html>