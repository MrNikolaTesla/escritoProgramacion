<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <!--BOOTSTRAP CSS PRINCIPAL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Listado</title>
    <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Search Box -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            // Animate select box length
            var searchInput = $(".search-box input");
            var inputGroup = $(".search-box .input-group");
            var boxWidth = inputGroup.width();
            searchInput.focus(function() {
                inputGroup.animate({
                    width: "300"
                });
            }).blur(function() {
                inputGroup.animate({
                    width: boxWidth
                });
            });
        });
        // Confirmación de eliminar usuario
        /*  function asegurar() {
              rc = confirm("¿Seguro que desea Eliminar al estudiante?");
              return rc;
          } */
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--
    <script>
        var eliminar = new Boolean(false);
        //ESTO https://www.javatpoint.com/sweetalert

            if (eliminar == true) {
                swal("Eliminado!", {
                    icon: "success",
                });
            } else {
                swal("No se eliminó");
            }
        
        swal({
            title: "Estás seguro?",
            text: "No se podrá recuperar el usuario",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }) 
    </script> -->

</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="show-entries">
                                <span>Mostrar</span>
                                <select>
                                    <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                                <span>entradas</span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h2 class="text-center">Listado de <b>Estudiantes</b></h2>
                        </div>
                        <div class="col-xs-4">
                            <div class="search-box">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                    <input type="text" class="form-control" placeholder="Buscar&hellip;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nombre <i class="fa fa-sort"></i></th>
                                <th>Grupo<i class="fa fa-sort"></i></th>
                                <th>Notas <i class="fa fa-sort"></i></th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                </form>


                <tbody>
                    <?php foreach ($matrizEstudiante as $estudiante) : ?>
                        <tr>
                            <td><input class="customcheckbox" type="checkbox" value="" id="flexCheckDefault1" />&nbsp;&nbsp;<?php echo $estudiante['id'] ?></td>
                            <td><?php echo $estudiante['nombre'] ?></td>
                            <td><?php echo $estudiante['grupo'] ?></td>
                            <td><?php echo $estudiante['notas'] ?></td>
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
        </div>
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
</body>

</html>