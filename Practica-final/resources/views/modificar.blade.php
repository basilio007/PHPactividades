<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <form>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevo Nick">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevo Email">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevos Nombre">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevos Apellidos">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevo DNI">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nueva Fecha nacimiento">

          </div>

        </div>
        <button type="submit">Guardar Cambios</button>
      </form>

      <form action="{{ route('app.see') }}" method="get">

        {{-- boton de salida --}}
        @csrf
        <button type="submit">Cancelar</button>
    </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</body>
</html>