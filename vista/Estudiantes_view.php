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
    <div>
        <!-- INICIO FORMULARIO ALTA -->
        <form class="col-4" method="POST">

            <h3 class="text-center2">Listado de Estudiantes</h3>

            <button class="boton-nuevo"><a href="pagina/RegistroEstudiantes.php" style="color:white;">Nuevo</a></button>
            <table id="customers">
                <thead class="tabla-borde">
                    <tr>
                        <th class="tabla-borde">Nombre</th>
                        <th class="tabla-borde">Grupo</th>
                        <th class="tabla-borde">Notas</th>
                        <th class="tabla-borde">Editar</th>
                        <th class="tabla-borde">Eliminar</th>
                    <tr>
                </thead>
    </div>
    </form>
    <tbody class="tabla-borde">
        <?php foreach ($matrizEstudiante as $estudiante) : ?>
            <tr class="tabla-borde">
                <td class="tabla-borde"><?php echo $estudiante['nombre'] ?></td>
                <td class="tabla-borde"><?php echo $estudiante['grupo'] ?></td>
                <td class="tabla-borde"><?php echo $estudiante['notas'] ?></td>
                <td class="tabla-borde"><a href="pagina/ModificarEstudiantes_pagina.php?id=<?php echo $estudiante['id'] ?>" class="boton-editar">Editar</a></td>
                <td class="tabla-borde"><a href="controlador/eliminar_estudiante_controlador.php?id=<?php echo $estudiante['id'] ?>" class="boton-eliminar"> Eliminar</a></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>

</html>