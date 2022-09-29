<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Proveedores</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
        <div class="container-fluid">
                        <p>
                                <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                        </p>
                </form>
                <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO FORMULARIO ALTA -->
                

                <button class="button1"><a href="pagina/Input.php">Nuevo</a></button>
                <!-- FIN FORMULARIO ALTA -->

                <div class="col-8 ">
                        <!-- No se cual es esta class porque es del boostrap -->
                        <!-- INICIO TABLA LISTAR -->
                        <?php require_once("controlador/Estudiante_controlador.php"); ?>
                        <!-- FIN TABLA LISTAR -->
                </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>