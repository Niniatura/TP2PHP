<?php
require_once 'conexion.php';
class Admin extends Connectdb {

 public $username;
 public $id;
 private $password;

 public function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}

 public	function setPassword($newPassword) {
		$this->password = md5($newPassword);
	}


  public function quaryAdmin() {
   //Check if the username input is set.
     $conn = $this->connect();
     $sql = "SELECT username, password FROM 'usuarios' WHERE .$this->'username',.$this->'password'";
     $results = mysqli_query($conn,$sql);

     if($results) {
      //Query was successful
      echo "Success";
     } else {
      echo mysql_error();
     }
   
  }
}



?>