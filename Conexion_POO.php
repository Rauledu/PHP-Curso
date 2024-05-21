<?php

require("Config_ClasesPOO.php");

class Conexion{


    protected $conexion_db;
    public function Conexion(){

            $this->conexion_db=new mysqli(db_host, db_usuario,db_password,db_nombre);

            if($this->conexion_db->connect_errno){

                echo "Fallo la conexion a Mysql:    ". $this->conexion_db->connect_error;

                return;
            }

            $this->conexion_db->set_chartset(DB_CHARSET);

    }



}

?>

