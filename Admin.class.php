<?php
require 'conexion.php';

class Admin {

	public $id;
	public $username = "";
	private $password = "";

	function __construct($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}

	function setPassword($newPassword) {
		$this->password = md5($newPassword);
	}
}

?>