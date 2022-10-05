<?php
require_once("../modelo/Estudiante.php");
$estudiante = new Estudiante();

/* Verifica si lo solicitado está vacío */
if (!empty($_POST["modificacion"])) {

    /* Verifica que todos los campos tengan datos */
    if (!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["notas"])) {

        /* Guarda los datos en cada variable */
        $id = $_POST["id"]; //Toma la id de la fila, el id no fue ingresado
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $notas = $_POST["notas"];
        $repetido = $estudiante->rep_estudiante($nombre, $grupo, $notas);

        /* Modifica los datos de estudiante, en su exacto id y verifica que los valores a modificar no sean existentes */
        if ($repetido != null) {
            $estado = 0;
        }

        if ($repetido == null) {
            $estado = $estudiante->update_estudiante($id, $nombre, $grupo, $notas);
        }

        /* Regresa un 1 si la operación fue exitosa*/
        if ($estado == 1) {
            header("Location: ../GestionDeEstudiantes.php");

            /* Si la solicitud no fue procesada correctamente */
        } else if ($repetido != null) {
            header("Location: ../GestionDeEstudiantes.php");

            /*Si la id no está seteada */
        } else {
            header("Location: ../GestionDeEstudiantes.php");
        }
    }
}
