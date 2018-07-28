<?php
// including the database connection file
require_once 'conexion.php';
include 'BaseDato.class.php';
include 'Posting.class.php'; 
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();

$titulo = $_POST['titulo_del_post'];
$contenido = $_POST['contenido_del_post'];

$editar= new Posting($titulo,$contenido);

var_dump($editar);
die();
//getting id from url
$id = $editar->escape_string($_GET['id']);
//selecting data associated with this particular id
$result = $editar->getData("SELECT * FROM blogtp_1 WHERE id=$id");
foreach ($result as $res) {
	$titulo = $res['titulo'];
	$contenido = $res['contenido'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edicion.php">
		<table border="0">
			<tr> 
				<td>Titulo</td>
				<td><input type="text" name="titulo" value="<?php echo $titulo;?>"></td>
			</tr>
			<tr> 
				<td>Contenido</td>
				<td><input type="text" name="contenido" value="<?php echo $contenido;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="editar"></td>
			</tr>
		</table>
	</form>
</body>
</html>