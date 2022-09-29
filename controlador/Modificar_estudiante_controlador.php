<?php

require_once("../modelo/Estudiante.php");
session_start();
$_SESSION['mod_estudiante'] = $id = $_GET['id'];

$estudiante = new Estudiante();

$estudiante_modificar = $estudiante->get_data();

require_once("../vista/Modificar_view.php");

?>