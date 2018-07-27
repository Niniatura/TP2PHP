<?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Posting.class.php';
    session_start();
    
$update=$_GET['update_post'];
$title="";
$content =""; 

$up=new Posting($update, $title,$content);

$fetchFetch2 = $up->editPost();

if ($fetchFetch2)
{
	echo 'post editable';
}
else
{
	echo 'hiciste cualquiera';
}





?>