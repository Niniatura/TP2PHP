<?php

// including the database connection file
require_once 'conexion.php';
include 'BaseDato.class.php';
include 'Posting.class.php'; 
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$posting = new Posting($titulo,$contenido);
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM blogtp_1 ORDER BY id DESC";
$result = $posting->getData($query);
//echo '<pre>'; print_r($result); exit;

include 'BaseDato.class.php';
include 'Posting.class.php'; 
include_once 'Admin.class.php';
session_start();



$titulo =@$_POST['titulo_del_post'];
$contenido=@$_POST['contenido_del_post'];


    $setPosting = new Posting($titulo,$contenido);
    $setPosting->showPosts();
    //fetching data in descending order (lastest entry first)
    $getPosting=new Posting($titulo,$contenido);
    $getPosting->setPost();
    



?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>titulo</td>
		<td>contenido</td>
		
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['titulo_del_post']."</td>";
		echo "<td>".$res['contenido_del_post']."</td>";
		
		echo "<td><a href='editar.php?id=".$res[id]."'>Editar</a> </td>";
		echo "</tr>";		
	}
	?>
	</table>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>titulo</td>
        <td>contenido</td>

    </tr>
    <td>
    

    </td>
    </table>

</body>
</html>