<?php
// should keep session here!
session_start();

include 'BaseDato.class.php';
include 'Posting.class.php'; 


// for a quick check you can use this function
// would check for titulo in GET, POST and SESSION

/*function is_set($name)
{
    if (isset($_POST[$name]))
    {
        return $_POST[$name];
    }
    elseif (isset($_GET[$name]))
    {
        return $_GET[$name];
    }
    elseif (isset($_SESSION[$name]))
    {
        return $_SESSION[$name];
    }
    else
    {
        return false;
    }
}
*/

// you have to check if titulo and contenido is set
// this would reduce error level to zero!
$result = [];


    if (isset($_POST['titulo_del_post']) && isset($_POST['contenido_del_post']))
{
    
    $posting = new Posting($titulo,$contenido);
    //fetching data in descending order (lastest entry first)
    $query = "SELECT * FROM blogtp_1 ORDER BY id DESC";
    $result = $posting->getData($query);
    //echo '<pre>'; print_r($result); exit;
}
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

    if (count($result) > 0)
    {
        foreach ($result as $key => $res) {     
            echo "<tr>";
            echo "<td>".$res['titulo_del_post']."</td>";
            echo "<td>".$res['contenido_del_post']."</td>";

            echo "<td><a href=\"editar.php?id={$res['id']}\">Editar</a> </td>";  
               
        }
    }
    ?>
    </table>
</body>
</html>