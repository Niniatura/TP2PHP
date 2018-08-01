<?php 

// incluyendo el archivo de conexión de la base de datos
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();


$delete=@$_POST['delete'];

if (isset($_POST['delete'])) {
$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];

// funcion de borrar el post por id
$getPosting2=new Posting($titulo,$contenido,$id);
$getPosting2->borrarPosts();

if ($getPosting2) {
	// redirigiendo a la página de visualización (index.php en nuestro caso)
	header("Location:index.php");
}
}
?>
