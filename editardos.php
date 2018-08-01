<?php 

// incluyendo el archivo de conexión de la base de datos
require_once 'conexion.php';
include_once 'BaseDato.class.php';
include_once 'Posting.class.php'; 
include_once 'Admin.class.php';

session_start();

// actualizar los datos en la base de datos cuando envía el formulario
if (isset($_POST['update'])) {
	
$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];
$getPosting=new Posting($titulo,$contenido,$id);
$getPosting->setPost();

// avisar si esta carrago o no
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
