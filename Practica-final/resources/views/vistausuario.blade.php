<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- link de boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

         {{-- link de fondansome --}}
        <script src="https://kit.fontawesome.com/1a1769f308.js" crossorigin="anonymous"></script>

    <title>Vista Usuario</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Nick</th>
              <th scope="col">Email</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">DNI</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col">contraseña</th>
              <th scope="col">Rol</th>
              <th></th>
            </tr>
          </thead>
 {{-- ruta qu facilita el retorno a la pagina del registro --}}
 <form action="{{ route('app.logout') }}" method="post">

    {{-- boton de salida --}}
    @csrf
    <button type="submit">LogOut</button>
</form>

    </table>

</body>
</html>
