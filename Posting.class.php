<?php
//La clase Posting construye un nuevo post que esta extendido a BaseDato.class.php
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

    // La función insertar nuevos datos en la base de datos de blogtp_1.sql
    public function setPost() {
     $conn = $this->connect();
     $sql = "UPDATE blogtp_1  SET titulo_del_post='$this->titulo', contenido_del_post='$this->contenido'
            WHERE id = '$this->id'";
     $results = $conn->query($sql);
     //$results = mysqli_query($conn,$sql);
     return $results;
 }
    
    
   // La función mostrar todo los datos por id en la base de datos de blogtp_1.sql
    public function showPosts($titulo, $contenido, $id){
          $conn = $this->connect();
          $sql = "SELECT * FROM blogtp_1 WHERE id = '$this->id'";
          $results = $conn->query($sql); 
          return $results;
        }
        
     // La función borrar los datos por id en la base de datos de blogtp_1.sql
    public function borrarPosts(){
     $conn = $this->connect();
     $sql = "DELETE FROM blogtp_1 WHERE id = '$this->id'";
     $results = $conn->query($sql);
     return $results; 
    }
}

?>

