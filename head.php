<?php
//requiere la conexion a la base de datos
require 'conexion.php'; 
//datos de la conexion
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
session_start();


// mostrar todos los datos en una función personalizada dentro de una función de un while loop
function show_posts() {
    global $conexion;
    //paginacion de los ultimos 5 posts con orden descendente
    $sql = "SELECT * FROM blogtp_1  ORDER BY id desc LIMIT 5";
    $result = mysqli_query($conexion, $sql);
    // en el while loop, hay una restricion de 100 caracteres
    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="card">
                <img class="card-img-top" src="imagen/' . $row["imagen_upload"] . '"/>
                <div class="card-body">
                     <h5 class="card-title">' . $row["titulo_del_post"] . '</h5>
                     <p class="card-text">' . substr($row['contenido_del_post'], 0,100) . '</p>
                     <a href="ver.php?id=' . $row["id"] . '" class="btn btn-primary">Ver</a>

                </div>
              </div>';
    }; 
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<img src="https://placeimg.com/720/200/arch" id="banner"/>

<div class="container" id="principal">
