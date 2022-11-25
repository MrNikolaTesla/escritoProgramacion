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
                <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
                        <div class="container">
                                <a class="navbar-brand">Ingresar Estudiante</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="../GestionDeEstudiantes.php">Listado de estudiantes</a>
                                                </li>
                                        </ul>

                                </div>
                        </div>
                </nav>
                <main class="my-form">
                        <div class="container">
                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                                <div class="card">
                                                        <div class="card-header">Datos del estudiante</div>
                                                        <?php require_once("../controlador/ControladorRegistroEstudiante.php"); ?>
                                                        <div class="card-body">
                                                                <div class="form-group row">
                                                                        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombres y apellidos</label>
                                                                        <div class="col-md-6">
                                                                                <input type="text" id="nombre" class="form-control" name="nombre" maxlength="50">
                                                                        </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                        <label for="grupo" class="col-md-4 col-form-label text-md-right">Grupo</label>
                                                                        <div class="col-md-6">
                                                                                <input type="text" id="grupo" class="form-control" name="grupo" maxlength="10">
                                                                        </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                        <label for="notas" class="col-md-4 col-form-label text-md-right">Notas</label>
                                                                        <div class="col-md-6">
                                                                                <input type="text" id="notas" class="form-control" name="notas" maxlength="5">
                                                                        </div>
                                                                </div>

                                                                <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary" name="boton_registro" value="enviar">Registrar estudiante</button>
                                                                </div>
                                                        </div>
                </main>
        </form>
</body>

</html>