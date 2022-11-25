<?php

require_once("../modelo/Estudiante.php");

// Chequea si un valor ha sido colocado, en este caso chequea el valor de id
if (isset($_GET['id'])) {

    $id = $_GET['id']; // En $id se guarda la id chequeada

    $estudiante = new Estudiante(); // Instancia nuevamente el objeto

    $matrizEstudiante = $estudiante->get_datos($id); //Se lleva la fila de la BD, en la que id = id

    require_once("../vista/MODIFICAR_estudiantes_VISTA.php");
}
?>