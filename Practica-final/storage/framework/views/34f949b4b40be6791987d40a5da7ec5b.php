<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    <script src="https://kit.fontawesome.com/1a1769f308.js" crossorigin="anonymous"></script>
    <title>Datos</title>
</head>

<body>  
    <h1 style="text-align: center">Usuarios</h1> 
    
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
            <?php if(isset($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->nick); ?></td>
                        <td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->nombre); ?></td>
                        <td><?php echo e($row->apellidos); ?></td>
                        <td><?php echo e($row->dni); ?></td>
                        <td><?php echo e($row->fecha_nacimiento); ?></td>
                        <td><?php echo e($row->contraña); ?></td>
                        <td><?php echo e($row->rol); ?></td>
                        
                        <td>
                            <a href="<?php echo e(route("proyecto.mmdfikusr")); ?>" class="btn btn-warning"><i class="fa-solid fa-marker"></i></a>
                            <a href="<?php echo e(route('proyecto.delete', ['id' => $row->id])); ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>

    </table>
    
    <form action="<?php echo e(route('app.logout')); ?>" method="get">

        
        <?php echo csrf_field(); ?>
        <button type="submit">LogOut</button>
    </form>

    <form action="<?php echo e(route('producto.select')); ?>" method="get">

        <?php echo csrf_field(); ?>
        <button type="submit">Productos</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\Medion\Practica-final\resources\views/aplicacion.blade.php ENDPATH**/ ?>