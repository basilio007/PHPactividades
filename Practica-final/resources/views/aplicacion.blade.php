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
    <title>Datos</title>
</head>

<body>
    <h1 style="text-align: center">Usuarios</h1>

    
    {{-- codigo de la tabla --}}
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

        <tbody>
            @if (isset($data))
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->nick }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->apellidos }}</td>
                        <td>{{ $row->dni }}</td>
                        <td>{{ $row->fecha_nacimiento }}</td>
                        <td>{{ $row->contraña }}</td>
                        <td>{{ $row->rol }}</td>
                        
                        <td>
                            <a href="{{route("proyecto.mmdfikusr")}}" class="btn btn-warning"><i class="fa-solid fa-marker"></i></a>
                            <a href="{{ route('proyecto.delete', ['id' => $row->id]) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
{{-- <a href="" ><i class="fa-solid fa-user-plus"></i></a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>

    </table>
    {{-- ruta qu facilita el retorno a la pagina del registro --}}
    <form action="{{ route('app.logout') }}" method="get">

        {{-- boton de salida --}}
        @csrf
        <button type="submit">LogOut</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
