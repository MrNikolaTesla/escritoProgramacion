<?php
    require_once("../modelo/Estudiante.php");
    $estudiante = new Estudiante();
if(!empty($_POST["boton_registro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["grupo"]) and !empty($_POST["notas"])) {
        $nombre = $_POST["nombre"];
        $grupo = $_POST["grupo"];
        $notas = $_POST["notas"];
        $telefono = $_POST["telefono"];
        $repetido = $estudiante->rep_estudiante($nombre, $grupo, $notas);

        if($repetido!=null){
            $estado = 0;
        }
    
        if ($repetido==null){
            $estado = $estudiante->set_estudiante($nombre, $grupo, $notas);
        }

if($estado==1) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Proveedor registrado correctamente!</div>';
}else if($repetido!=null){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">El proveedor ya ha sido agregado al sistema previamente.</div>';
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Alguno de los campos está vacio.</div>';
}
}
}

?>