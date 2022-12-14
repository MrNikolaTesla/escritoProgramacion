<?php
class Estudiante
{

    private $con;

    public function __construct()
    {
        require_once("conexion.php"); //conexión
        $this->con = conectar::conexion();
    }
    // Añade un nuevo estudiante a la base de datos
    public function actualizar_estudiante($id, $fecha, $centro, $nombre_apellido, $curso, $edad, $numero_cel, $correo)
    {
        $sql = "UPDATE datos set fecha = '$fecha', centro = '$centro', nombre_apellido = '$nombre_apellido', curso = '$curso', edad = '$edad', numero_cel = '$numero_cel', correo = '$correo', WHERE id = '$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    // Saca toda la información de los estudiantes cargados en la base de datos
    public function listar_estudiante()
    {
        $sql = "SELECT * FROM datos";
        $query = mysqli_query($this->con, $sql);
        while ($filas = mysqli_fetch_array($query)) {

            // Crea una variable estudiante, la cual es un array. Ordena los valores en filas de array
            $this->estudiante[] = $filas;
        }
        return $this->estudiante; //Devuelve el array
    }

    public function set_estudiante($fecha, $centro, $nombre_apellido, $curso, $edad, $numero_cel, $correo)
    {
        $sql = "INSERT INTO datos (fecha, centro, nombre_apellido, curso, edad, numero_cel, correo) VALUES ('$fecha', '$centro', '$nombre_apellido', '$curso', '$edad', '$numero_cel','$correo')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function repetido_estudiante($numero_cel, $correo)
    {
        $sql = "SELECT * FROM datos WHERE numero_cel LIKE '%$numero_cel%' and correo = '$correo'";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function get_datos($id)
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
?>