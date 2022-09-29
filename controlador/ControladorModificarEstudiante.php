<?php
    require_once("../modelo/Estudiante.php");
    $estudiante = new Estudiante();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["notas"])) {
        
        //echo "<div class="alert alert-success">Alumno dado de alta correctamente</div>";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $notas = $_POST["notas"];

        $repetido = $estudiante->rep_estudiante($nombre, $grupo, $notas);

        if($repetido!=null){
            $estado = 0;
    }
    
    if ($repetido==null){
        $estado = $estudiante->update_estudiante($id, $nombre, $grupo, $notas);
    }

        

if($estado==1) {
    //session_start(); 
    //$_SESSION['message'] = 'Estudiante modificado correctamente';
    header("Location: ../GestionDeEstudiantes.php");
}else if($repetido!=null){
    //session_start(); 
    //$_SESSION['message'] = 'Producto equivalente ya encontrado en el sistema.';
    header("Location: ../GestionDeEstudiantes.php");
}else{
    //session_start(); 
    //$_SESSION['message'] = 'Proveedor no modificado, algo ha fallado.';
    header("Location: ../GestionDeEstudiantes.php");
}
}
}

?>