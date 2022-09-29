<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles2.css">

    <title>Index no tan loco</title>

</head>

<body>
    <div class="container-fluid">
        <!-- No se cual es esta class porque es del boostrap -->
        <!-- INICIO FORMULARIO ALTA -->
        <form class="col-4" method="POST">

            <h3 class="text-center2">Listado de Alumnos</h3>
            <table class="tablas-usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre y Apellido</th>
                        <th>Empresa</th>
                        <th>Productos</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    <tr>
                </thead>
    </div>
    </form>
    <tbody>

        <?php foreach ($matrizEstudiante as $estudiante) : ?>
            <tr>
                <td><?php echo $estudiante['id'] ?></td>
                <td><?php echo $estudiante['nombre'] ?></td>
                <td><?php echo $estudiante['grupo'] ?></td>
                <td><?php echo $estudiante['notas'] ?></td>
                <td><a href="controlador/eliminar_estudiante_controlador.php?id=<?php echo $estudiante['id'] ?>" class="btn btn-danger"> Eliminar</a></td>
                <td><a href="pagina/ModificarEstudiantes_pagina.php?id=<?php echo $estudiante['id'] ?>" class="btn btn-secondary">Modificar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>

</html>