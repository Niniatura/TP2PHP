<?php
class Connectdb{
    private $host;
    private $user;
    private $pass;
    private $db;

    // La función conectar se conecta a la base de datos
    protected function connect(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "blog";
        
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $conn;
    }
}
?>