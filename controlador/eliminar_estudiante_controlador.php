<?php
require_once("../modelo/Estudiante.php");

/* Se podría guardar en sesión, pero al no implementar, se crea en cada instancia un nuevo objeto */
$estudiante = new Estudiante(); 

/* Chequea si un valor ha sido colocado, en este caso chequea el valor de id */
if (isset($_GET['id'])) {

    $id = $_GET['id']; // En $id se guarda la id chequeada
    $estado = $estudiante->eliminar_estudiante($id); // La funcion eliminar_estudiante, se lleva la id para eliminarla

    /* Regresa un 1 si la operación fue exitosa*/
    if ($estado == 1) {
        header("Location: ../GestionDeEstudiantes.php");

    /* Si la solicitud no fue procesada correctamente */
    } else {
        header("Location: ../GestionDeEstudiantes.php");
    }

    /*Si la id no está seteada */
    } else {
    header("Location: ../GestionDeEstudiantes.php");
}
