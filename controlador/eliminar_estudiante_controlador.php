<?php
require_once("../modelo/Estudiante.php");
    $eliminarProveedor = new Estudiante();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $eliminarProveedor->eliminar_proveedor($id);

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Proveedor eliminado correctamente';
    header("Location: ../GestionDeProveedores.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'No se ha podido eliminar el proveedor seleccionado.';
    header("Location: ../GestionDeProveedores.php");
}

}else{
    session_start(); 
    $_SESSION['message'] = 'El proveedor seleccionado no existe.';
    header("Location: ../GestionDeProveedores.php");
}

?>