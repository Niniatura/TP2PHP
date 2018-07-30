<?php 

// including the database connection file
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
//include 'editar.php';
//datos de la conexion
 //$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();


if (isset($_POST['update'])) {
	
	$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];
$getPosting=new Posting($titulo,$contenido,$id);
$getPosting->setPost();

}




 ?>