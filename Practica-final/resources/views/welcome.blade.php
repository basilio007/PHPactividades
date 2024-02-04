<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body>
  <!--<a href="{//{ route('proyecto.login') }}">Volver</a>-->

    @if (session('corecto'))
        <div class="alert alert-success">{{ session('corecto') }}</div>
    @endif

    @if (session('incorecto'))
        <div class="alert alert-danger">{{ session('incorecto') }}</div>
    @endif
    <form action="{{ route('Proyecto.create') }}" method="post">
        @csrf


        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputNick4"><b>Nick:</b></label>
                <input type="text" class="form-control" name="nick" placeholder="Tu Nick">
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4"><b>Email:</b></label>
                <input type="email" class="form-control" name="email" placeholder="Tu Email">
            </div>

        </div>
        <div class="form-group">
            <label for="inputNombre"><b>Nombre:</b></label>
            <input type="text" class="form-control" name="nombre" placeholder="Tu Nombre">
        </div>

        <div class="form-group">
            <label for="inputApellidos2"><b>Apellidos:</b></label>
            <input type="text" class="form-control" name="apellidos" placeholder="Tus Apellidos">
        </div>

        <div class="form-group">
            <label for="inputApellidos2"><b>Dni:</b></label>
            <input type="text" class="form-control" name="dni" placeholder="Tu DNI">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputfchanacimiento"><b>Fecha Nacimiento:</b></label>
                <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Tu Fecha Nacimiento">
            </div>

            <div class="form-group col-md-2">
                <label for="inpuContraseña"><b>Contraseña:</b></label>
                <input type="password" class="form-control" name="contraña" placeholder="Tu Contraseña">
            </div>

            <div class="form-group col-md-2">
                <label for="inpuRol"><b>Rol:</b></label>
                <input type="text" class="form-control" name="rol" placeholder="Tu Rol">
            </div>

        </div>

        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</body>

</html>
