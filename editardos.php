<?php 

// including the database connection file
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';

session_start();


if (isset($_POST['update'])) {
	
$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];
$getPosting=new Posting($titulo,$contenido,$id);
$getPosting->setPost();
?>
<script>
		alert('editar con éxito');
        window.location.href='index.php?exito';
        </script>
<?php
} else {
	?>
	<script>
		alert('error al editar el post');
        window.location.href='index.php?error';
        </script>
	<?php
}
?>
