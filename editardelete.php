<?php
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
    <td>
    

    </td>
    </table>
</body>
</html>