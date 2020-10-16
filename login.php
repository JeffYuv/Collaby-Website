<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


  <section class="img">

    <div class="box">
      <div class="header">
        <img src="images/CollabyLogo.png" alt="Collaby Logo" width="100px" height="90px" />
        <h2>Login</h2>
      </div>
      <form method="post" action="login.php">

        <?php include('errors.php'); ?>

        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
          Not yet a member? <a class="btn2" href="register.php">Sign up</a>
        </p>
      </form>
    </div>
  </section>


</body>

</html>