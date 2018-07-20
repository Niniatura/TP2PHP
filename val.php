   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    session_start();
    


    $user = $_POST['inputUser'];
    $pass = $_POST['inputPass'];

    $admin = new Admin($user,$pass); // se puede hace asi???
    $admin->setPassword($pass);

    // $pass = md5($pass);

    //$quaryAdmin = $admin->quaryAdmin();
    $fetchFetch = $admin->quaryAdmin();// mysqli_fetch_array($quaryAdmin); 

    if ($fetchFetch)
    {
      $_SESSION['id'] = $fetchFetch['id'];

      header("location: index.php");
    }
    else
    {
      $_SESSION["msgError"] = "Ingresaste un usuario o contraseña erróneos.";
      header("location: login.php"); // no va a login
    }
    
    ?>