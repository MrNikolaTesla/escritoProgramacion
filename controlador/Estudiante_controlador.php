<?php

require_once("modelo/Estudiante.php");

/* Crea un objeto Estudiante (por el new), tiene todas las variables de los esturiantes */

$estudiantes = new Estudiante();

/* Variable utilizada en estudiantes_view.php, el valor de $matriz estudiante va a ser a la función listarestudiantes */
$matrizEstudiante = $estudiantes->listar_estudiantes();

require_once("vista/Estudiantes_view.php");
