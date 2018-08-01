   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';
    session_start();
    


    $user = $_POST['inputUser'];
    $pass = $_POST['inputPass'];

    $admin = new Admin($user,$pass); 
    $admin->setPassword($pass);

    $fetchFetch = $admin->quaryAdmin();

    // si el login no esta igual al id, mostra msg error
    if ($fetchFetch)
    {
      $_SESSION['id'] = $fetchFetch['id'];

      header("location: index.php");
    }
    else
    {
      $_SESSION["msgError"] = "Ingresaste un usuario o contraseña erróneos.";
      header("location: login.php"); 
    }
    
    ?>