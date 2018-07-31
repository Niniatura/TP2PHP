   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    include 'Comment.class.php'; 

    session_start();


    $uid = $_POST['uid'];
    $message = $_POST['message'];

    $setComments = new Comments($uid,$message); 
    $setComments->setComments();


    $getComments = new Comments($uid,$message); 
    $getComments->getComments();

    



    //$getmessage = $row['message'];

   

    

    ?>

    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Commentarios</title>
  </head>
  <body class="bg-light">

    <main role="main" class="container">
      <div class="my-3 p-3 bg-dark text-white rounded box-shadow headercomment">
        <div class="lh-100">
          <h6 class="mb-0 text-black lh-100">Comentarios</h6>
          <small>TP Blog 2018</small>
            <small class="d-block text-right mt-3">
          <a href="index.php" class="colorlink"><i class="fas fa-home colorlink"></i> Home</a>
        </small>

        </div>

        <?php
         $setComments = new Comments($uid,$message); 
        $setComments->setComments();


        $getComments = new Comments($uid,$message); 
        $getComments->getComments();

    ?>
      </div>
    
             
      
  </main>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
