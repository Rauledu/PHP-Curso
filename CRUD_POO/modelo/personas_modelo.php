<?php

class Personas_modelo
{

    private $db;
    private $personas;

    public function __construct()
    {
        require_once ("modelo/conectar.php");

        $this->db = conectar::conexion();

        $this->personas = array();

    }

    public function getPersonas()
    {
        require("paginacion.php");
        $consulta = $this->db->query("SELECT * FROM datosusuarios LIMIT $comenzar_desde , $tamaño_paginas");

        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {

            $this->personas[] = $fila;
        }
        return $this->personas;

    }
}


?>