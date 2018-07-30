<?php


// including the database connection file
require_once 'conexion.php';
include 'BaseDato.class.php';
include 'Posting.class.php'; 
include_once 'Admin.class.php';
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();


//$titulo =@$_POST['titulo_del_post'];
//$contenido=@$_POST['contenido_del_post'];
$id=@$_GET['id'];
    //$setPosting = new Posting($titulo,$contenido,$id);
    //
//$setPosting->showPosts();
    //fetching data in descending order (lastest entry first)
    //$getPosting=new Posting($titulo,$contenido,$id);
    //$getPosting->setPost();


//function updatePost(){    
//if (isset($_POST['update'])) {
//	global $conexion;
    $id = @$_GET['id'];
    $sql = "SELECT * FROM blogtp_1 where id=$id";
    $result2 = mysqli_query($conexion, $sql);
    $mostrar_post=mysqli_fetch_array($result2);
    

//echo '<textarea name="contenido_del_post">'.$mostrar_post['titulo_del_post'].'</textarea>';
//}
//}
//}

?>


<html>
<head>	
	<title>Homepage</title>
</head>

<body>


	<form action="editardos.php?id=<?php echo $id ?>" method="post">
   <textarea name="titulo_del_post"> <?php echo $mostrar_post['titulo_del_post'] ?></textarea>

   <textarea name="contenido_del_post" ><?php echo $mostrar_post['contenido_del_post'] ?></textarea>
   <button type="submit" name="update">Guardar</button>
   </form>
   
</body>
</html>


