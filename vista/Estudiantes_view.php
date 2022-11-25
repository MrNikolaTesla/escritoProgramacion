<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Confirmación de eliminar usuario, funciona cada vez que se quiere eliminar un usuario
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar al usuario?");
            return rc;
        }
    </script>
=======
=======
>>>>>>> parent of 38637fd (messi)
=======
>>>>>>> parent of 38637fd (messi)
        // Confirmación de eliminar usuario
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar al estudiante?");
            return rc;
        }
<<<<<<< HEAD
<<<<<<< HEAD

        //ESTO https://www.javatpoint.com/sweetalert
        sweetAlert({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!"
            },
            deleteIt()
        );
    </script>

>>>>>>> parent of 38637fd (messi)
=======
=======

        //ESTO https://www.javatpoint.com/sweetalert
        sweetAlert({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!"
            },
            deleteIt()
        );
    </script>
>>>>>>> parent of 38637fd (messi)

        //ESTO https://www.javatpoint.com/sweetalert
        sweetAlert({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!"
            },
            deleteIt()
        );
    </script>

>>>>>>> parent of 38637fd (messi)
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Administrar <b>Estudiantes</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir nuevo estudiante</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal" onclick="javascript:return asegurar();"> <i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
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
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1"><?php echo $estudiante['id'] ?>
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?php echo $estudiante['fecha'] ?></td>
                                <td><?php echo $estudiante['centro'] ?></td>
                                <td><?php echo $estudiante['nombre_apellido'] ?></td>
                                <td><?php echo $estudiante['curso'] ?></td>
                                <td><?php echo $estudiante['edad'] ?></td>
                                <td>0<?php echo $estudiante['numero_cel'] ?></td>
                                <td><?php echo $estudiante['correo'] ?></td>
                                <td>
                                    <a href="#viewEmployeeModal" class="view" data-toggle="tooltip"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xE417;</i></a>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary"><a href="pagina/RegistroEstudiantes.php" style="color:white;">Registrar estudiante</a></button>
                <!--------------- PAGINADO --------------->

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
            </div>
        </div>
    </div>
    <!--------------- FIN DE PAGINADO --------------->

    <!-------------- AÑADIR ESTUDIANTE -------------->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="datetime" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Centro</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Curso</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Edad</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Número de contacto</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-------------- FIN DE AÑADIR ESTUDIANTE ------------->

    <!----------------- EDITAR ESTUDIANTE ------------->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>#ID</label>
                            <input type="datetime" class="form-control" readonly required>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="datetime" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Centro</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Curso</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Edad</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Número de contacto</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!----------------- FIN DE EDITAR ESTUDIANTE --------------->

    <!----------------- ELIMINAR ESTUDIANTE ------------------>
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Está seguro de querer eliminar al estudiante?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-------------- FIN DE ELIMINAR ESTUDIANTE -------------->
</body>

</html>