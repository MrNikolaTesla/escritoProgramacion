<?php
class proveedores_modelo
{

    private $con;
    private $proveedor;

    public function __construct()
    {
        require_once("modelo/conexion.php");
        $this->con = Conectar::conexion();
        $this->proveedor = array();
    }

    public function get_proveedores()
    {

        $sql = "SELECT * FROM proveedor";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)) {
            $this->proveedor[] = $filas;
        }

        return $this->proveedor;
    }
}

?>