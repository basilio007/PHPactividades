<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
   
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevo Nombre">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nueva Descripcion">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Unidades">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nuevo Precio">
          </div>

          <div class="col">
            <input type="text" class="form-control" placeholder="Nueva Categoria">
          </div>

        </div>
        <form action="<?php echo e(route('proyecto.savechanges')); ?>"method='post'>
        <button type="submit">Guardar Cambios</button>
    </form>
    
      </form>

      <form action="<?php echo e(route('producto.select')); ?>" method="get">

        
        <?php echo csrf_field(); ?>
        <button type="submit">Cancelar</button>
    </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</body>
</html><?php /**PATH C:\Users\Medion\Practica-final\resources\views/updateprod.blade.php ENDPATH**/ ?>