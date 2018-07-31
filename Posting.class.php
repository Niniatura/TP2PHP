<?php
require_once 'conexion.php';
require_once 'BaseDato.class.php';
require_once 'Admin.class.php';
class Posting extends Connectdb {
    public $titulo; 
    public $contenido;
    public $id;
    public function __construct($titulo,$contenido, $id) {
          $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->id = $id;
    }
    public function setPost() {
     $conn = $this->connect();
     $sql = "UPDATE blogtp_1  SET titulo_del_post='$this->titulo', contenido_del_post='$this->contenido'
            WHERE id = '$this->id'";
     $results = $conn->query($sql);
     //$results = mysqli_query($conn,$sql);
     return $results;
 }
    
    
    public function showPosts(){
          $conn = $this->connect();
          $sql = "SELECT titulo_del_post, contenido_del_post FROM blogtp_1 WHERE id = '$this->id'";
          $results = $conn->query($sql); 
          while ($row = $results->fetch_assoc()) {
            $id = $row['id'];
            $titulo = $row['titulo'];
            $coniendo = $row['contenido'];
            
        }

        return $results;
    }
    
    public function borrarPosts($id){
     $conn = $this->connect();
     $sql = "DELETE FROM blogtp_1 WHERE id = '$this->id'";
     $results = $conn->query($sql);
     return $results; 
    }
}

?>

