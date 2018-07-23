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
		echo "<div class='container media text-muted pt-3 my-3 p-3 bg-white rounded box-shadow'>";
		echo "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>";
			echo "<strong class='d-block text-gray-dark'>".$row['uid']."</strong><br>";
			echo $row['message'];
		echo "</p></div>";
	}
	
		
	// MIRIAR listar() in php2018 github Usuarios

	}

}



 ?>