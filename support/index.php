<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once('header.php');?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Bethacorp Support</header>
        <form action="#" method="POST" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>Nombre</label>
              <input type="text" name="fname" placeholder="First Name" required/>
            </div>
            <div class="field input">
              <label>Apellido</label>
              <input type="text" name="lname" placeholder="Last Name" required/>
            </div>
          </div>
          <div class="field input">
            <input type="email" name="email" placeholder="Enter your email" required/>
            <label>Correo electrónico</label>
          </div>
          <div class="field input">
            <label>Constraseña</label>
            <input type="password" name="password" placeholder="Enter new password" required/>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Continue to Chat"/>
          </div>
        </form>
        <div class="link">
          Ya tienes una cuenta? <a href="login">Iniciar sesión</a>
        </div>
      </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
  </body>
</html>
