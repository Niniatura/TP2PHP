<?php

require_once 'conexion.php';
require_once 'BaseDato.class.php';
require_once 'Admin.class.php';


class Posting extends Connectdb {

    public $titulo; 
    public $contenido;

    public function __construct($titulo,$contenido) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    public function getData($query)
    {       
        $result = $this->conn->query($query);

        if ($result == false) {
            return false;
        } 

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query) 
    {
        $result = $this->conn->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }       
    }

    public function delete($id, $table) 
    { 
        $query = "DELETE FROM blogtp_1 WHERE id = $id";

        $result = $this->conn->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    /*public function escape_string($value)
    {
        return $this->conn->real_escape_string($value);
    } */

}

?>