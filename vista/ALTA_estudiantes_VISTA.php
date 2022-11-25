<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Estudiantes</title>
    <!--- Clase CSS principal -->
    <link rel="stylesheet" href="assets/styles.css">
    <!--  Clases de CSS y Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Clases de Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <form method="POST">
        <?php require_once("../controlador/ALTA_estudiante_CONTROLADOR.php"); ?>
        <!-------------- ALTA DE ESTUDIANTE -------------->
        <div id="añadirEstudiante">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Añadir estudiante</h4>
                            <a href="../index.php"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="datetime-local" name="fecha" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Centro</label>
                                <input type="text" name="centro" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre_apellido" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Curso</label>
                                <input type="text" name="curso" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Edad</label>
                                <input type="text" name="edad" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Número de contacto</label>
                                <input type="text" name="numero_cel" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="text" name="correo" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="../index.php"> <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar"></a>
                            <input type="submit" class="btn btn-success" name="boton_registro" value="Añadir">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <!-------------- FIN DE ALTA DE ESTUDIANTE ------------->
</body>

</html>