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

<<<<<<< HEAD
=======
	
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
=======
    public function getData($query)
    {       
        $result = $this->conn->query($query);
>>>>>>> 4c166659c5c2cf5c721fafd81769c4e95c878217
>>>>>>> c3ffe823193361c48bc2feaa1878d077a2537469

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