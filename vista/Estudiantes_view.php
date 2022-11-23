<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    </script>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Administrar <b>Estudiantes</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir nuevo estudiante</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
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
                    <!-------------- Datos de la BDD -------------->
                    <tbody>
                        <?php foreach ($matrizEstudiante as $estudiante) : ?>
                            <tr>
                                <td><input class="customcheckbox" type="checkbox" value="" id="flexCheckDefault1" />&nbsp;&nbsp;<?php echo $estudiante['id'] ?></td>
                                <td><?php echo $estudiante['fecha'] ?></td>
                                <td><?php echo $estudiante['centro'] ?></td>
                                <td><?php echo $estudiante['nombre_apellido'] ?></td>
                                <td><?php echo $estudiante['curso'] ?></td>
                                <td><?php echo $estudiante['edad'] ?></td>
                                <td>0<?php echo $estudiante['numero_cel'] ?></td>
                                <td><?php echo $estudiante['correo'] ?></td>
                                <td>
                                    <a href="#" class="view" title="Ver" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    <a href="pagina/ModificarEstudiantes_pagina.php?id=<?php echo $estudiante['id'] ?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="controlador/eliminar_estudiante_controlador.php?id=<?php echo $estudiante['id'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons" onclick="javascript:return asegurar();">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary"><a href="pagina/RegistroEstudiantes.php" style="color:white;">Registrar estudiante</a></button>
            </div>
            <!---------------------------------------------->
            <!--------------------- PAGINADO ------------------------->

            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!--------------------- FIN DEL PAGINADO ------------------------>

    <!-- AÑADIR ESTUDIANTE -->
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
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Centro</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <textarea class="form-control" required></textarea>
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
                        <input type="submit" class="btn
                        
                         btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EDITAR ESTUDIANTE -->
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
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Centro</label>
                            <textarea class="form-control" required></textarea>
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
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ELIMINAR ESTUDIANTE -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Está seguro de eliminar al estudiante?</p>
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
</body>

</html>