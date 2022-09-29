<?php
class Estudiante{

    private $con;

    public function __construct() {
    require_once("conexion.php");
    $this->con=conectar::conexion();
    }

    public function update_estudiante($id, $nombre, $grupo, $notas)
    {
        $sql = "UPDATE datos set nombre = '$nombre', grupo = '$grupo', notas = '$notas' WHERE id = $id";
        $query = mysqli_query($this->con,$sql);
        return $query;
    }

    public function listar_estudiantes()
    {
        $sql = "SELECT * FROM datos";
        $query = mysqli_query($this->con, $sql);
        while ($filas = mysqli_fetch_array($query)) {
            $this->estudiante[] = $filas;
        }
        return $this->estudiante;
    }

    public function set_estudiante($nombre, $grupo, $notas)
    {
        $sql = "INSERT INTO datos (nombre, grupo, notas) VALUES ('$nombre', '$grupo', '$productos', '$telefono')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function rep_estudiante($nombre_apellido, $empresa, $productos, $telefono)
    {
        $sql = "SELECT * FROM proveedor WHERE nombre_apellido LIKE '%$nombre_apellido%' and empresa = '$empresa' and productos = '$productos' and telefono = '$telefono'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function get_data()
    {
        $id = $_SESSION['mod_proveedor'];
        $sql = "SELECT * FROM datos WHERE id = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_estudiante($id)
    {
        $sql = "DELETE FROM proveedor WHERE id_proveedor = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    }

?>