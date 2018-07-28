<?php
require_once 'conexion.php';
include 'BaseDato.class.php';
include 'Posting.class.php'; 
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$editar = new Posting($titulo,$contenido);

if(isset($_POST['update']))
{	
	$id = $editar->escape_string($_POST['id']);
	
	$titulo = $editar->escape_string($_POST['titulo']);
	$contenido = $editar->escape_string($_POST['contenido']);
		
		$result = $editar->execute("UPDATE blogtp_1 SET titulo_del_post='$titulo',contenido_del_post='$contenido' WHERE id=$id");
		
	
}
?>