<?php

require_once("modelo/Estudiante.php");

$estudiantes = new Estudiante();

$matrizEstudiante = $estudiantes->listar_estudiantes();

require_once("vista/Estudiantes_view.php");

?>