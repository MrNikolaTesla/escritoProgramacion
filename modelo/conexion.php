<?php

class Conectar{
    public static function conexion (){
    
        try{
    
            $host ="localhost";
            $user ="root";
            $pass="";
            $bd="estudiantes";
            $con = mysqli_connect($host,$user,$pass);
            mysqli_select_db($con,$bd);
            return $con;
    
        }catch(Exception $e){
    die('Error'.$e->getMessage());
    echo "La linea de error " . $e->getLine();
        }
    }
    
    }

?>