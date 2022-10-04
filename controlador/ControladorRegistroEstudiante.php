<?php

/* Solicito al Estudiante.php */
require_once("../modelo/Estudiante.php");

/* Creo nuevamente el objeto Estudiante */
$estudiante = new Estudiante();

/* Se verifica si está vacío */
if (!empty($_POST["boton_registro"])) {

    /* Verifica que las tres variables tengan datos dentro */
    if (!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["notas"])) {

        /* Coloca los datos en la variables */
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $notas = $_POST["notas"];

        /* Busca un estudiante con las mismas variables, no es buscar repetidos, sino buscar datos iguales (exactamente iguales) */
        $repetido = $estudiante->rep_estudiante($nombre, $grupo, $notas);

        /* rep_estudiante regresa nulo si hay datos repetidos*/
        /* null = no encuentra datos repetidos */
        if ($repetido != null) {
            $estado = 0;
        }

        /* Si no hay repetidos, se ingresa el estudiante */
        if ($repetido == null) {
            $estado = $estudiante->set_estudiante($nombre, $grupo, $notas);
        }

        if ($estado == 1) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Estudiante registrado correctamente!</div>';
            echo '<br>';
        } else if ($repetido != null) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">El estudiante ya ha sido agregado al sistema previamente.</div>';
            echo '<br>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Alguno de los campos está vacio.</div>';
            echo '<br>';
        }
    }
}
