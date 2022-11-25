<?php

require_once("modelo/Estudiante.php");

/* Crea un objeto Estudiante (por el new), tiene todas las variables de los esturiantes */

$estudiantes = new Estudiante();

/* Variable utilizada en AMBL_estudiantes_VISTA.php, el valor de $matriz estudiante va a ser a la función listarestudiantes */
$matrizEstudiante = $estudiantes->listar_estudiante();

require_once("vista/ABML_estudiantes_VISTA.php");
?>