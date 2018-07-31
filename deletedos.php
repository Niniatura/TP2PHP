<?php 

// incluyendo el archivo de conexión de la base de datos
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();

$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];

if (isset($_POST['delete'])) {

$borrarPosts= new Posting();

$result = $borrarPosts->borrarPosts($id, $titulo, $contenido);

if ($result) {
	// redirigiendo a la página de visualización (index.php en nuestro caso)
	header("Location:index.php");
}
}
?>
