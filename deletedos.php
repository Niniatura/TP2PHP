<?php 

// including the database connection file
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();


if (isset($_POST['delete'])) {

$borrarPosts= new Posting();
$id=@$_GET['id'];

$result = $borrarPosts->borrarPosts($id, 'blogtp_1');

if ($result) {
	//redirecting to the display page (index.php in our case)
	header("Location:index.php");
}
?>
