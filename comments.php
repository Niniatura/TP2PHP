   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Comment.class.php'; 

    session_start();


    $uid = $_POST['uid'];
    $message = $_POST['message'];
    //$getmessage = $row['message'];

    $setComments = new Comments($uid,$message); 
    $setComments->setComments();


    $getComments = new Comments($uid,$message); 
    $getComments->getComments();

    

    ?>