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

public function editPost() {
	$conn = $this->connect();
	$sql = "SELECT * FROM blogtp_1";
	$results = $conn->query($sql);
	while ($row = $results->fetch_assoc()) {
		echo "<div>";
			echo $row['id']."<br>";
			echo $row['titulo_del_post'];
			echo $row['contenido_del_post'];
		echo "<form action='update_post.php' method='POST'>
            <input type='hidden' name='id' value='".$row['id']."'/>
            <input type='hidden' name='titulo' value='".$row['titulo_del_post']."'/>
            <input type='hidden' name='contenido' value='".$row['contenido_del_post']."'/>
             <button>Editar</button>
             </form>";
		echo "</div>";
	}
}
//*helo


}
 ?>