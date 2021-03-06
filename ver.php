<?php 
//requiere la conexion a la base de datos
require 'conexion.php';
require_once 'Posting.class.php';
include_once 'BaseDato.class.php';
include_once 'Admin.class.php';


//datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();

$id="";
$titulo="";
$contenido="";



// mostrar por id el post en una función personalizada dentro de una función de un while loop
function show_all_post(){
    global $conexion;
    $id = @$_GET['id'];
    $sql = "SELECT * FROM blogtp_1 where id=$id";
    $result2 = mysqli_query($conexion, $sql);
    while ($mostrar_post=mysqli_fetch_array($result2)){
        echo '<img class="card-img-top" src="imagen/' . $mostrar_post["imagen_upload"] . '"/>';
        echo '<h1>'.$mostrar_post["titulo_del_post"].'</h1>';
        echo '<div class="contenido_post">'.$mostrar_post["contenido_del_post"].'</div>';
        echo ' <a href="editar.php?id=' . $mostrar_post["id"] . '" class="btn btn-primary">Editar</a>';
        echo ' <a href="delete.php?id=' . $mostrar_post["id"] . '" class="btn btn-primary">Borrar</a>';


    }

}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <img src="https://placeimg.com/720/200/arch" id="banner"/>

        <div class="container" id="principal">
            <a href="index.php" class="btn">Home</a>

            <?php 
            // llamada a la funcion para mostrar el post completo
            show_all_post() 
            ?>  
            <br>
            <!-- Form para Commenarios-->
              <h4>Tener algo que decir...</h4>
            
             <form method='POST' action='comments.php'>
              <div class='form-group'>
               <input type='text' class='form-control' name='uid' placeholder="tu nombre">
              <textarea class='form-control' id='message' name='message' rows='3'></textarea>
             </div>
             <button class='btn btn-lg btn-primary text-white btn-block mt-4 type='submit' name='commentSubmit'>Envíanos tus comentarios</button>

        </form>
        

             </div>
        


    </body>
</html>