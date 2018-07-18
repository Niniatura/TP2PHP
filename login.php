<?php
require_once 'conexion.php';
include 'BaseDato.class.php'; 
//datos de la conexion
 $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
include 'loginhead.php';
?>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form method="POST" action="val.php" class="form-signin">
            <h2 class="form-signin-heading text-center">Inicia sesión</h2>
            <hr>
            <label for="inputUser" class="sr-only">Usuario</label>
            <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Ingrese su usuario" required>
            <label for="inputPass" class="sr-only">Contraseña</label>
            <input type="password" id="inputPass" name="inputPass" class="form-control" placeholder="Ingrese su contraseña" required>

            <button class="btn btn-lg btn-primary text-white btn-block mt-4" type="submit">Ingresar</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <p class="text-center">
             <?php
              session_start();
              if (isset($_SESSION['msgError']))
              {
                echo $_SESSION['msgError'];
                unset($_SESSION['msgError']);
              }
             ?>
          </p>
        </div>
      </div>
    </div>
 <?php
include 'loginfooter.php';
?>
