<?php 

require_once 'conexion.php';
require_once 'BaseDato.class.php';
require_once 'Admin.class.php';
class Posting extends Connectdb {
public $id;
public $titulo;
public $contenido;

public function __construct($id,$titulo,$contenido){
	$this->id = $id;
	$this->titulo = $titulo;
	$this->contenido = $contenido;
}

/*public function editPost(){
	$conn = $this->connect();
	$sql= "UPDATE blogtp_1 SET titulo_del_post ='$this->titulo' and contenido ='$this->contenido' WHERE id='$this->id'";

	$results2 =mysqli_query($conn,$sql);
	return $results2;
} */

public function editPost($id,$titulo,$contenido) {
	$conn = $this->connect();
	$sql = "UPDATE blogtp_1 set '$this->titulo', '$this->contenido' where '$this->id'";
	$results = $conn->query($sql);
	return $results;
	
}


}
 ?>