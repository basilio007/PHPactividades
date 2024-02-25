<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<script src="https://kit.fontawesome.com/1a1769f308.js" crossorigin="anonymous"></script>

    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Unidades</th>
                <th scope="col">Precio_Unidades</th>
                <th scope="col">Categoria</th>
                
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php if(isset($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->nombre); ?></td>
                        <td><?php echo e($row->descripcion); ?></td>
                        <td><?php echo e($row->unidades); ?></td>
                        <td><?php echo e($row->precio_unitario); ?></td>
                        <td><?php echo e($row->categoria); ?></td>
                        
                        
                        <td>
                            <a href="<?php echo e(route("proyecto.updateprod")); ?>" class="btn btn-warning"><i class="fa-solid fa-marker"></i></a>
                            <a href="<?php echo e(route('proyecto.eliminarprod', ['id' => $row->id])); ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>

    
</body>
</html><?php /**PATH C:\Users\Medion\Practica-final\resources\views/Proctos.blade.php ENDPATH**/ ?>