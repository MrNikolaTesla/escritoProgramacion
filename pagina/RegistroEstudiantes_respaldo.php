<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <title>Registro</title>
</head>

<body>
        <form class="col-4" method="POST">
                <h3 class="h3-registro">Registro de Estudiante</h3>
                <?php require_once("../controlador/ControladorRegistroEstudiante.php"); ?>
                <div class="div-registro">
                        <label class="form-label">Nombre/s y Apellido/s</label>
                        <input type="text" class="tablas-input" name="nombre" maxlength="50">
                </div>
                <div class="div-registro">
                        <label class="form-label">Grupo</label>
                        <input type="text" class="tablas-input" name="grupo" maxlength="10">
                </div>
                <div class="div-registro">
                        <label class="form-label">Notas</label>
                        <input type="text" class="tablas-input" name="notas" maxlength="2">
                </div>
                <button class="boton-volver"><a href="../index.php" style="color:white;">Volver</a></button>
                <button type="submit" class="boton-enviar" name="boton_registro" value="enviar">Registrar</button>
        </form>
</body>

</html>