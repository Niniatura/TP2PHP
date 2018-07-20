   <?php 
   require 'conexion.php';
    include 'BaseDato.class.php';
    include 'Admin.class.php';

    


    $user = $_POST['inputUser'];
    $pass = $_POST['inputPass'];

    $admin = new Admin($user,$pass); // se puede hace asi???
    $admin->setPassword($pass);

    // $pass = md5($pass);

    $quaryAdmin = $admin->quaryAdmin();
    $fetchFetch = mysqli_fetch_array($quaryAdmin); 
    
    if ($quaryAdmin)
    {
      $_SESSION['id'] = $quaryAdmin['id'];
      header("location: index.php");
    }
    else
    {
      $_SESSION["msgError"] = "Ingresaste un usuario o contraseña erróneos.";
      header("location: login.php"); // no va a login
    }
    
    ?>