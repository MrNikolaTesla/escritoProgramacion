<?php
require_once("../modelo/Estudiante.php");
$estudiante = new Estudiante();

// Verifica si lo solicitado está vacío
if (!empty($_POST["modificacion"])) {

    // Verifica que todos los campos tengan datos
    if (!empty($_POST["fecha"]) and !empty($_POST["centro"]) and !empty($_POST["nombre_apellido"] and !empty($_POST["curso"]) and !empty($_POST["edad"]) and !empty($_POST["edad"]) and !empty($_POST["numero_cel"]) and !empty($_POST["correo"]))) {

        // Guarda los datos en cada variable
        $id = $_POST["id"]; //Toma la id de la fila, el id no fue ingresado
        $fecha = $_POST["fecha"];
        $centro = $_POST["centro"];
        $nombre_apellido = $_POST["nombre_apellido"];
        $curso = $_POST["curso"];
        $edad = $_POST["edad"];
        $numero_cel = $_POST["numero_cel"];
        $correo = $_POST["correo"];

        $repetido = $estudiante->repetido_estudiante($nombre_apellido, $numero_cel, $correo);

        // Modifica los datos de estudiante, en su exacto id y verifica que los valores a modificar no sean existentes
        if ($repetido != null) {
            $estado = 0;
        }

        if ($repetido == null) {
            $estado = $estudiante->actualizar_estudiante($id, $fecha, $centro, $nombre_apellido, $curso, $edad, $numero_cel, $correo);
        }

        // Regresa un 1 si la operación fue exitosa
        if ($estado == 1) {
            header("Location: ../index.php");

        // Si la solicitud no fue procesada correctamente
        } else if ($repetido != null) {
            header("Location: ../index.php");

        //Si la id no está seteada
        } else {
            header("Location: ../index.php");
        }
    }
}
?>