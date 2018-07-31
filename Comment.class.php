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
     return $results;
		

	}

	public function getComments() {
	$conn = $this->connect();
	$sql = "SELECT * FROM comments ORDER by cid DESC";
	$results = $conn->query($sql);
	while ($row = $results->fetch_assoc()) {
		echo "<div class='container media text-muted pt-3 my-3 p-3 bg-white rounded box-shadow'>";
		echo "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>";
			echo "<strong class='d-block text-gray-dark'> Nombre: ".$row['uid']."</strong><br>";
			echo $row['message'];
		echo "</p></div>";
	}

	}

	

}



 ?>