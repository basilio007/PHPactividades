<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud With Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/1a1769f308.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Crud Pokemon With Laravel</h1> 
    
   @if(session('Excelente'))
       <div class="alert alert-success">{{session("Excelente")}}</div>
   @endif

   @if(session('Error'))
   <div class="alert alert-damger">{{session("Error")}}</div>
@endif
   


    <div class="p-5 table-responsive">      

        <table class="table table-striped">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Tamaño</th>
                    <th scope="col">Peso</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->tipo }}</td>
                        <td>{{ $item->tamano }}</td>
                        <td>{{ $item->peso }}</td>
                        <td>
                            <!-- boton modificacion-->
                            <a href="" data-bs-toggle="modal" data-bs-target="#modoEditar{{ $item->nombre }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-marker"></i></a>

                             <!-- boton eleminar-->
                            <a href="{{route("pokemon.delete",$item->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                        </td>


                        <!-- Modal modificacion-->
                        <div class="modal fade" id="modoEditar{{ $item->nombre }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Pokemon</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{route("pokemon.update")}}"method="post">
                                            @csrf
                                            <div class="mb-0">
                                                <label for="exampleInputEmail1" class="form-label">ID</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="formid" value="{{ $item->id }}">                     
                                            </div>

                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="formnombre" value="{{ $item->nombre}}">                     
                                            </div>

                                            <!-- el desplegable y sus opciones-->
                                            <div class="mb-2">
                                              <label for="exampleInputEmail1" class="form-label">Tipo</label>
                                             <select name="formtipo" value="{{ $item->tipo }}" required>
                                              <option value="water">Agua</option>
                                              <option value="fire">Fuego</option>
                                              <option value="plant">Planta</option>
                                              <option value="electric">Electrico</option>
                                              <option value="hada">Hada</option>
                                              <option value="tierra">tieta</option>
                                              <option value="siniestro">Siniestro</option>
                                              
                                            </select> 
                                            
                                            <div class="mb-3">
                                              <label for="exampleInputEmail1" class="form-label">Tamanño</label>
                                             <select name="formtamaño" required>
                                              <option value="grande">Grande</option>
                                              <option value="mediano">Mediano</option>
                                              <option value="pequeño">Pequño</option>                                               
                                            </select> 
                                          </div>

                                          <div class="mb-4">
                                            <label for="exampleInputEmail1" class="form-label">Peso</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="formpeso" value="{{ $item->peso }}">                     
                                        </div>                                                                                 

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </tr>
                @endforeach
            </tbody>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalinsertar">Crear Pokemon</button>
 <!-- Modal crear-->   
            <div class="modal fade" id="modalinsertar" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Pokemon</h1>
                        
                    <!-- botton crear-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route("pokemon.create")}}"method="post">
                            @csrf
                            <div class="mb-0">
                                <label for="exampleInputEmail1" class="form-label">ID</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="formid" value="{{ $item->id }}">                     
                            </div>

                            <div class="mb-1">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="formnombre">                     
                            </div>

                            <div class="mb-2">
                              <label for="exampleInputEmail1" class="form-label">Tipo</label>
                             <select name="formtipo" required>
                              <option value="Agua">Agua</option>
                              <option value="Fuego">Fuego</option>
                              <option value="Planta">Planta</option>
                              <option value="Electrico">Electrico</option>
                              <option value="Hada">Hada</option>
                              <option value="tieta">tierra</option>
                              
                            </select> 
                            
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tamanño</label>
                             <select name="formtamaño" required>
                              <option value="Grande">Grande</option>
                              <option value="Mediano">Mediano</option>
                              <option value="Pequño">Pequño</option>                                               
                            </select> 
                          </div>

                          <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Peso</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="formpeso">                     
                        </div>                                                                                 

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cerar</button>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
