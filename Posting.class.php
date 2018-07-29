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













/* viejo
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
} 

public function editPost($id,$titulo,$contenido) {
	$conn = $this->connect();
	$sql = "UPDATE blogtp_1 set '$this->titulo', '$this->contenido' where '$this->id'";
	$results = $conn->query($sql);
	return $results;
	
}
*/


}
 ?>