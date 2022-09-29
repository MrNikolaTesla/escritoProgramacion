<?php
    require_once("../modelo/Estudiante.php");
    $estudiante = new Estudiante();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["nota"]) and !empty($_POST["telefono"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $nota = $_POST["nota"];

        $repetido = $estudiante->get_estudiante($nombre_apellido, $empresa, $productos, $telefono);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $estudiante->update_estudiante($id, $nombre_apellido, $empresa, $productos, $telefono);
    }

        

if($estado==1) {
    session_start(); 
    $_SESSION['message'] = 'Proveedor modificado correctamente';
    header("Location: ../pagina/GestionDeProveedores.php");
}else if($repetido!=null){
    session_start(); 
    $_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: ../pagina/GestionDeProveedores.php");
}else{
    session_start(); 
    $_SESSION['message'] = 'Proveedor no modificado, algo ha fallado.';
    header("Location: ../pagina/GestionDeProveedores.php");
}
echo "Mori 1";
}
echo "Mori 2";
}

?>