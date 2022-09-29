<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Listado</title>

</head>

<body>
    <div class="container-fluid">
        <!-- No se cual es esta class porque es del boostrap -->
        <!-- INICIO FORMULARIO ALTA -->
        <form class="col-4" method="POST">

            <h3 class="text-center2">Listado de Estudiantes</h3>
            <button class="button1"><a href="pagina/RegistroEstudiantes.php">Nuevo</a></button>

            <table class="tablas-usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Grupo</th>
                        <th>Notas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
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
                <td><a href="pagina/ModificarEstudiantes_pagina.php?id=<?php echo $estudiante['id'] ?>" class="btn btn-secondary">Editar</a></td>
                <td><a href="controlador/eliminar_estudiante_controlador.php?id=<?php echo $estudiante['id'] ?>" class="btn btn-danger"> Eliminar</a></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>

</html>