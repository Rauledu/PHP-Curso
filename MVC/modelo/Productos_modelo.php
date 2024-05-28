<?php

class Productos_modelo
{

    private $db;
    private $productos;

    public function __construct()
    {
        require_once ("modelo/conectar.php");

        $this->db = conectar::conexion();

        $this->productos = array();

    }

    public function getProductos()
    {
        $consulta = $this->db->query("SELECT * FROM tarjetas");

        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {

            $this->productos[] = $fila;
        }
        return $this->productos;

    }
}


?>