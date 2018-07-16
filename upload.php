<?php
// conexión a la base de datos
require 'conexion.php';
//datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// cuando hace el click en submit, enviar los datos a la base de datos
if(isset($_POST['submit']))
{    
    $titulo =$_POST['titulo'];
    $contenido = $_POST['contenido'];
	$file = "-".$_FILES['imagen']['name'];
    $file_loc = $_FILES['imagen']['tmp_name'];
	$folder="imagen/";
	
	// hacer el nombre del archivo en minúscula
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);

		
	// subir la imagen en una carpeta en la base de datos
    if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO blogtp_1(imagen_upload,titulo_del_post,contenido_del_post) VALUES('$final_file','$titulo','$contenido')";
		

		$resultado = mysqli_query($conexion, $sql);
		
		

// mostrar si se cargó con exito el post		
?>

		<script>
		alert('cargado con éxito');
        window.location.href='index.php?exito';
        </script>
<?php
	}
	else
	{

// mostrar si hubo un error al cargar el post		
		?>
		<script>
		alert('error al cargar el archivo');
        window.location.href='index.php?error';
        </script>
<?php
	}
}

?>