<?php 
require_once 'conexion.php';

class Comments extends Connectdb {

	public $uid;
	public $message; 

	public function __construct($uid,$message) {
		$this->uid = $uid;
		$this->message = $message;
	}

	public function setComments() {
	 $conn = $this->connect();
     $sql = "INSERT INTO comments (uid, message) 
     		 VALUES ('$this->uid', '$this->message')";
     $results = $conn->query($sql);
     //$results = mysqli_query($conn,$sql);
     return $results;
		

	}

	public function getComments() {
	$conn = $this->connect();
	$sql = "SELECT * FROM comments";
	$results = $conn->query($sql);
	while ($row = $results->fetch_assoc()) {
		echo "<div>";
			echo $row['uid']."<br>";
			echo $row['message'];
		echo "</div>";
	}
	
		
	// MIRIAR listar() in php2018 github Usuarios

	}

}



 ?>