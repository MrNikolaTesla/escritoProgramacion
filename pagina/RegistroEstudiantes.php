<!DOCTYPE html>
<html lang="es">

<head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <title>Ingresar Estudiante</title>
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
                        <div class="cotainer">
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

        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>