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
    <!--------------------------->

    <script>
        $(document).ready(function() {
            // Activar tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Selección/Deseleccion de Checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
        // Confirmación de eliminar usuario, funciona cada vez que se quiere eliminar un usuario
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar al usuario?");
            return rc;

        }
    </script>
</head>

<body>
    <!--------- INICIO DE ABML --------->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Administrar <b>Estudiantes</b></h2>
                        </div>
                        <div class="col-sm-6">

                            <input hidden class="buttons" type="submit" name="boton_registro" value="Registrar"></input>
                            <a href="vista/ALTA_estudiantes_VISTA.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Añadir nuevo estudiante</span></a>
                            <a href="BAJA_estudiantes_VISTA.php" class="btn btn-danger" onclick="javascript:return asegurar();"> <i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>#ID</th>
                            <th>Fecha</th>
                            <th>Centro</th>
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>Edad</th>
                            <th>Número de contacto</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($matrizEstudiante as $estudiante) : ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?php echo $estudiante['id'] ?></td>
                                <td><?php echo $estudiante['fecha'] ?></td>
                                <td><?php echo $estudiante['centro'] ?></td>
                                <td><?php echo $estudiante['nombre_apellido'] ?></td>
                                <td><?php echo $estudiante['curso'] ?></td>
                                <td><?php echo $estudiante['edad'] ?></td>
                                <td>0<?php echo $estudiante['numero_cel'] ?></td>
                                <td><?php echo $estudiante['correo'] ?></td>
                                <td>
                                    <a href="LISTADO_estudiantes_VISTA.php" class="view"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xE417;</i></a>
                                    <a href="pagina/MODIFICAR_estudiantes.php?id=<?php echo $estudiante['id'] ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="controlador/BAJA_estudiante_CONTROLADOR.php?id=<?php echo $estudiante['id'] ?>" class="delete" onclick="javascript:return asegurar();"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!--------------- INICIO DE PAGINADO --------------->
                <div class="clearfix">
                    <div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Anterior</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                    </ul>
                </div>
                <!--------------- FIN DE PAGINADO --------------->
            </div>
        </div>
    </div>
    <!--------- FIN DE ABML --------->
</body>

</html>