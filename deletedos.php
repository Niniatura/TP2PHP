<?php 

// incluyendo el archivo de conexión de la base de datos
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();


if (isset($_POST['delete'])) {

$borrarPosts= new Posting();
$id=@$_GET['id'];

$result = $borrarPosts->borrarPosts($id);

if ($result) {
	// redirigiendo a la página de visualización (index.php en nuestro caso)
	header("Location:index.php");
}
?>
