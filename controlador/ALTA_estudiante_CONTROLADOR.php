<?php

/* Solicito al Estudiante.php */
require_once("../modelo/Estudiante.php");

/* Creo nuevamente el objeto Estudiante */
$estudiante = new Estudiante();

// Se verifica si está vacío
if (!empty($_POST["boton_registro"])) {

    // Verifica que las variables tengan datos dentro
    if (!empty($_POST["fecha"]) and !empty($_POST["centro"]) and !empty($_POST["nombre_apellido"]) and !empty($_POST["curso"]) and !empty($_POST["edad"]) and !empty($_POST["numero_cel"]) and !empty($_POST["correo"])) {

        // Coloca los datos en la variables
        $fecha = $_POST["fecha"];
        $centro = $_POST["centro"];
        $nombre_apellido = $_POST["nombre_apellido"];
        $curso = $_POST["curso"];
        $edad = $_POST["edad"];
        $numero_cel = $_POST["numero_cel"];
        $correo = $_POST["correo"];

        // Busca un estudiante con las mismas variables, no es buscar repetidos, sino buscar datos iguales (exactamente iguales)
        $repetido = $estudiante->repetido_estudiante($numero_cel, $correo);

        // repetido_estudiante regresa nulo si hay datos repetidos
        // null = no encuentra datos repetidos
        if ($repetido != null) {
            $estado = 0;
        }

        // Si no hay repetidos, se ingresa el estudiante
        if ($repetido == null) {
            $estado = $estudiante->set_estudiante($fecha, $centro, $nombre_apellido, $curso, $edad, $numero_cel, $correo);
        }

        if ($estado == 1) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Estudiante registrado correctamente!</div>';
            echo '<br>';
        } else if ($repetido != null) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">El estudiante ya ha sido agregado al sistema previamente.</div>';
            echo '<br>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Alguno de los campos están vacios.</div>';
            echo '<br>';
        }
    }
}
