<?php
require_once("../modelo/Estudiante.php");
    $estudiante = new Estudiante();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $estudiante->eliminar_estudiante($id);

if($estado==1) {
    header("Location: ../GestionDeEstudiantes.php");
}else{
    header("Location: ../GestionDeEstudiantes.php");
}
}else{
    header("Location: ../GestionDeEstudiantes.php");
}
