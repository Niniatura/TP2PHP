<?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Posting.class.php';
    //datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    session_start();




$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$editar = new Posting($id,$titulo,$contenido);
$editar->editPost();
    
           

            








?>