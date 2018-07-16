<?php

// conexión a la base de datos
require 'conexion.php';
//datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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

             <h1>Agregar nuevo post</h1>

             <form enctype="multipart/form-data" method="POST" action="upload.php">
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="titulo">Titulo</label>
                     <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
                   </div>
                   <div class="form-group col-md-6">
                       <label for="archivo">Imagen portada</label>
                       <input name="imagen" type="file" class="form-control-file" id="archivo">
                   </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-10">
                       <label for="contenido">Contenido</label>
                       <textarea class="form-control" id="contenido" placeholder="Contenido" name="contenido"></textarea>
                     </div>
                 </div>

                 <input name = "submit" type="submit" value="Agregar" class="btn btn-primary">
                 <a href="index.php" class="btn">Cancelar</a>
             </form>
         </div>

     </body>
</html>
