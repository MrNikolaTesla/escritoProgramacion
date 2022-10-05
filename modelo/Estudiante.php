<?php
class Estudiante
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php"); //conexión
        $this->con = conectar::conexion();
    }

    public function update_estudiante($id, $nombre, $grupo, $notas)
    {
        $sql = "UPDATE datos set nombre = '$nombre', grupo = '$grupo', notas = '$notas' WHERE id = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    /* Saca toda la información de los estudiantes cargados en la base de datos */
    public function listar_estudiantes()
    {
        $sql = "SELECT * FROM datos";
        $query = mysqli_query($this->con, $sql);
        while ($filas = mysqli_fetch_array($query)) {

            /* Crea una variable estudiante, la cual es un array. Ordena los valores en filas de array */
            $this->estudiante[] = $filas;
        }
        return $this->estudiante; //Devuelve el array
    }

    public function set_estudiante($nombre, $grupo, $notas)
    {
        $sql = "INSERT INTO datos (nombre, grupo, notas) VALUES ('$nombre', '$grupo', '$notas')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function rep_estudiante($nombre, $grupo, $notas)
    {
        $sql = "SELECT * FROM datos WHERE nombre LIKE '%$nombre%' and grupo = '$grupo' and notas = '$notas'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function get_data($id)
    {
        $sql = "SELECT * FROM datos WHERE id = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function eliminar_estudiante($id)
    {
        $sql = "DELETE FROM datos WHERE id = $id";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}
