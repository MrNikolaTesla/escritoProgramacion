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

        <title>Modificacion</title>
</head>

<body>
        <form method="POST">
                <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
                        <div class="container">
                                <a class="navbar-brand">Modificar Estudiante</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="../index.php">Listado de estudiantes</a>
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
                                                        <div class="card-header">Datos</div>
                                                        <?php require_once("../controlador/ControladorModificarEstudiante.php"); ?>
                                                        <?php foreach ($estudiante_modificar as $estudiante) { ?>
                                                                <div class="card-body">
                                                                        <div class="form-group row">
                                                                                <label for="id" class="col-md-4 col-form-label text-md-right">ID</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="id" class="form-control" name="id" value="<?php echo $estudiante['id'] ?>" readonly>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="datetime" id="fecha" class="form-control" name="fecha" value="<?php echo $estudiante['fecha'] ?>">
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="centro" class="col-md-4 col-form-label text-md-right">Centro</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="centro" class="form-control" name="centro" value="<?php echo $estudiante['centro'] ?>">
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="cedula" class="col-md-4 col-form-label text-md-right">Documento</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="cedula" class="form-control" name="cedula" value="<?php echo $estudiante['cedula'] ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                                <label for="nombre_apellido" class="col-md-4 col-form-label text-md-right">Nombre y Apellido</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="nombre_apellido" class="form-control" name="nombre_apellido" value="<?php echo $estudiante['nombre_apellido'] ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                                <label for="curso" class="col-md-4 col-form-label text-md-right">Curso</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="curso" class="form-control" name="curso" value="<?php echo $estudiante['curso'] ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                                <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="edad" class="form-control" name="edad" value="<?php echo $estudiante['edad'] ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                                <label for="numero_cel" class="col-md-4 col-form-label text-md-right">Celular</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="numero_cel" class="form-control" name="numero_cel" value="<?php echo $estudiante['numero_cel'] ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                                <label for="correo" class="col-md-4 col-form-label text-md-right">Correo</label>
                                                                                <div class="col-md-6">
                                                                                        <input type="text" id="correo" class="form-control" name="correo" value="<?php echo $estudiante['correo'] ?>">
                                                                                </div>
                                                                        </div>
                                                                <?php } ?>
                                                                <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar</button>
                                                                </div>
                                                                </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </main>
        </form>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>