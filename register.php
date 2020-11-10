<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
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

  <script>
    function myFunction(){
      var inpObj = document.getElementById("id1").value;

      if(inpObj.length < 8){
        document.getElementById("passcode").innerHTML = "To Short, Enter 8-15 Characters For Each Field Below."
      }
      else if(inpObj.length > 15){
        document.getElementById("passcode").innerHTML = "To Long, Enter 8-15 Characters For Each Field Below. "
      }
      else{
        document.getElementById("passcode").innerHTML = "Passcode Valid";
      }
    }
  </script>

  <section class="img">
    <div class="formlog">
      <div class="header">
        <img src="images/CollabyLogo.png" alt="Collaby Logo" width="100px" height="90px" />
        <h2>Register</h2>
      </div>

      <form method="post" action="register.php">

        <?php include('errors.php'); ?>
        <p id="passcode" style="color:red"></p>
        <div class="input-group">
          <label>Username</label>
          <input id="id1" type="text" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
          <label>Password</label>
          <input id="id1" type="password" name="password_1" required>
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input id="id1" type="password" name="password_2" required>
        </div>
        <div class="input-group">
          <button onclick="myFunction()" type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <input type="checkbox">
        <label> I Want Special Offers Emailed To Me</label><br><br>
        <p>
          Already a member? <a class="btn2" href="login.php">Sign in</a>
        </p>
      </form>
    </div>




  </section>

</body>

</html>