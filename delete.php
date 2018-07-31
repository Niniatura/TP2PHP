<?php
// incluyendo el archivo de conexión de la base de datos
require_once 'conexion.php';
include 'BaseDato.class.php';
include 'Posting.class.php'; 
include_once 'Admin.class.php';
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();


$id=@$_GET['id'];
   
    
     $id = @$_GET['id'];
    $sql = "SELECT * FROM blogtp_1 where id=$id";
    $result2 = mysqli_query($conexion, $sql);
    $mostrar_post=mysqli_fetch_array($result2);
    


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Borrar</title>
  </head>
  <body>

<div class="container">
  <h2>Borrar La Publicación Aqui</h2>
 

<form action="deletedos.php?id=<?php echo $id ?>" method="post">
 
  <div class="form-group">
      
      <textarea class="form-control" rows="3" name="titulo_del_post"> <?php echo $mostrar_post['titulo_del_post']?></textarea>
      <br>
      <textarea class="form-control" rows="3"  name="contenido_del_post"><?php echo $mostrar_post['contenido_del_post']?></textarea>
      <br>
       <button type="submit" name="delete" class="btn btn-primary">Borrar</button>
  </div>
</form>
</div>
-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>