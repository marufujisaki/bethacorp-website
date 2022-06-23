<?php include_once('header.php');?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Bethacorp Support</header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Correo electrónico</label>
            <input type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label>Constraseña</label>
            <input type="password" name="password" placeholder="Enter your password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Aun no tienes una cuenta? <a href="index">Registrate</a></div>
      </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
