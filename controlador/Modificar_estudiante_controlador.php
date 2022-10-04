<?php

require_once("../modelo/Estudiante.php");

/* Chequea si un valor ha sido colocado, en este caso chequea el valor de id */
if (isset($_GET['id'])) {

    $id = $_GET['id']; // En $id se guarda la id chequeada

    $estudiante = new Estudiante(); // Instancia nuevamente el objeto

    $estudiante_modificar = $estudiante->get_data($id); //Se lleva la fila de la BD, en la que id = id

    require_once("../vista/Modificar_view.php");
}
