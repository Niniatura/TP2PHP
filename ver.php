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
            
            <form action="update_post.php" method="get">
            <input type="submit" name="edit_post" value="editar" />
            </form>             
            
            
            

            <!---<form action="delete_post.php" method="get">
            <input type="submit" name="delete_post" value="borrar" />
            </form> -->
                 

             </div>


            



        </div>
    </body>
</html>
