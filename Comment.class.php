<?php 
require_once 'conexion.php';

class Comments extends Connectdb {

	public $uid;
	public $date;
	public $message; 

	public function __construct($uid, $date, $message) {
		$this->uid = $uid;
		$this->date = $date;
		$this->message = $message;
	}

	public function setComments() {
	 $conn = $this->connect();
     $sql = "INSERT INTO comments (uid, date, message) 
     		 VALUES ('$uid', '$date', '$message')";
     $results = mysqli_query($conn,$sql);
     return $results;
		

	}

	public function getComments() {
		

		
	}

}



 ?>