<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

  <header>
    <nav>
      <a href="index.html">
        <img src="images/CollabyLogo.png" alt="Collaby Logo" width="60px" height="50px" />
      </a>
      <h4 class="logotitle">Collaby</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="discover.html">Discover</a></li>
        <li><a href="home.php">My Page</a></li>
        <li><a href="features.html">Features</a></li>
        <li><a href="help.html">Help</a></li>
        <li><a href="aboutus.html">About</a></li>
        <li><a href="status.html">Status</a></li>
      </ul>
      <a href="home.php"><button class="login login1">Login</button></a>
    </nav>
  </header>


  <section class="img">

    <div class="formlog">
      <div class="header">
        <img src="images/CollabyLogo.png" alt="Collaby Logo" width="100px" height="90px" />
        <h2>Login</h2>
      </div>
      <form method="post" action="login.php">

        <?php include('errors.php'); ?>

        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" required>
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" required>
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