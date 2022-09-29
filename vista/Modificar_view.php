<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Modificar</title>
</head>

<body>
        <form method="POST">
                <h3 class="text-center2">Modificacion de Estudiante</h3>
                <?php require_once("../controlador/ControladorModificarEstudiante.php"); ?>
                <?php foreach ($estudiante_modificar as $estudiante) { ?>
                        <div class="mb-3">
                                <label class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $estudiante['id'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s y Apellido/s</label>
                                <input type="text" class="form-control" name="nombre" maxlength="50" value="<?php echo $estudiante['nombre'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Grupo</label>
                                <input type="text" class="form-control" name="grupo" maxlength="10" value="<?php echo $estudiante['grupo'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Notas</label>
                                <input type="text" class="form-control" name="notas" maxlength="2" value=" <?php echo $estudiante['notas'] ?>">
                        </div>
                <?php } ?>
                <button class="boton-volver"><a href="../GestionDeEstudiantes.php" style="color:white;">Volver</a></button>
                <button type="submit" class="boton-modificar" name="modificacion" value="enviar">Modificar</button>

        </form>