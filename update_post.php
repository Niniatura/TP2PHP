<?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Posting.class.php';
    //datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    session_start();


if (isset($_GET['edit_post']))

{
	$id=$_GET['edit_post'];
	$sql= mysqli_query($conexion,"SELECT * FROM blogtp_1 WHERE id= $id");
	//$result=mysqli_fetch_array($sql);
	$result = mysqli_query($conexion, $sql)or die(mysql_error());

}
    
           

            








?>
<html>
<head>

</head>
<body>




 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="titulo_del_post" value="<?php echo $result['titulo_del_post']; ?>"  /></td>
    </tr>
    <tr>
    <td><input type="text" name="contenido_del_post"  value="<?php echo $result['contenido_del_post']; ?>" /></td>
    </tr>
    
    <button type="submit" name="edit_post"><strong>UPDATE</strong></button>
    
    </table>
    </form>
    </div>



</body>
</html>