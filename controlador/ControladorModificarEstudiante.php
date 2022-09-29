<?php
    require_once("../modelo/Estudiante.php");
    $estudiante = new Estudiante();
if(!empty($_POST["modificacion"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["notas"])) {
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
    header("Location: ../GestionDeEstudiantes.php");
}else if($repetido!=null){
    header("Location: ../GestionDeEstudiantes.php");
}else{
    header("Location: ../GestionDeEstudiantes.php");
}
}
}

?>