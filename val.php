   <?php 
   // require 'conexion.php';
    spl_autoload_register(function ($nombre_clase)
  {
    include $nombre_clase . '.class.php';
  });
    include 'BaseDato.class.php';
    include 'Admin.class.php';

    session_start();


    $user = $_POST['inputUser'];
    $pass = $_POST['inputPass'];

    $admin = new Admin(); // se puede hace asi???
    $admin->setPassword($newPassword);

    // $pass = md5($pass);

    $r = mysqli_query($conexion, "select * from usuarios where username = '$user' and password = '$pass'");
    $fetchFetch = mysqli_fetch_array($r); // hace que hace un query??

    if ($fetchFetch)
    {
      $_SESSION["id"] = $fetchFetch['id'];
      header("location: index.php");
    }
    else
    {
      $_SESSION["msgError"] = "Ingresaste un usuario o contraseña erróneos.";
      header("location: login.php"); // no va a login
    }
    ?>