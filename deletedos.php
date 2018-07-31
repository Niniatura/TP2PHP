<?php 

// including the database connection file
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();


if (isset($_POST['delete'])) {
	
	$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];
$borrarPosts=new Posting($titulo,$contenido,$id);
$borrarPosts->borrarPosts();

}




 ?>