<?php

require_once 'conexion.php';
require_once 'BaseDato.class.php';
require_once 'Admin.class.php';


class Posting extends Connectdb {

    public $titulo; 
    public $contenido;

    public function __construct($titulo,$contenido) {
        $this->titulo_del_post = $titulo;
        $this->contenido_del_post = $contenido;
    }


    public function setPost() {
     $conn = $this->connect();
     $sql = "UPDATE blogtp_1  SET titulo_del_post, contenido_del_post
             WHERE titulo_del_post ='$this->titulo_del_post'and contenido_del_post= '$this->contenido_del_post')";
     $results = $conn->query($sql);
     //$results = mysqli_query($conn,$sql);
     return $results;
 }
    
    public function showPosts(){
          $conn = $this->connect();
          $sql = "SELECT * FROM blogtp_1";
          $results = $conn->query($sql); 
          while ($row = $results->fetch_assoc()){
            echo $row['titulo_del_post'];
            echo $row['contenido_del_post'];
          } 
          var_dump($_POST);
        }
    
    /*public function escape_string($value)
    {
        return $this->conn->real_escape_string($value);
    } */

}

?>