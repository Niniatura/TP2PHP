<?php
include 'head.php';
?>
    <h1>Bienvenido a mi blog!</h1>
    
    <a href="new_post.php" class="btn btn-primary btn-add">Agregar post</a>

      
      <?php 
      // no anda el logoout
        if(isset($_SESSION['id'])){
      ?>
      <a class="btn btn-outline-danger" href="logout.php"><i class="far fa-times-circle"></i> Logout</a> 
      <?php
      } else {
      ?>
      <a class="btn btn-outline-primary" href="login.php"><i class="fas fa-user"></i> Sign in</a>
      <?php
      }
    ?>
     
    <h2>Ultimos 5 posts</h2>
    <div id="card-list">
        
        <?php
        // llamada a la funcion para mostrar los posts
         show_posts(); 

         ?>

    </div>
</div>

<?php
include 'footer.php';
?>
