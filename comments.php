   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Comment.class.php'; 

    session_start();


    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $seeComments = new Comments($uid,$date,$message); 
    $seeComments->setComments($results);

  

    ?>