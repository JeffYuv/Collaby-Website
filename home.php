<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Collaby - My Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<nav>
			<a href="index.html">
				<img src="images/CollabyLogo.png" alt="Collaby Logo" width="60px" height="50px" />
			</a>
			<h4>Collaby</h4>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="discover.html">Discover</a></li>
				<li><a href="mypage.html">My Page</a></li>
				<li><a href="features.html">Features</a></li>
				<li><a href="help.html">Help</a></li>
				<li><a href="aboutus.html">About</a></li>
				<li><a href="status.html">Status</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="box5">
			<h2>My Page</h2>
			<!-- logged in user information -->
			<?php if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a class="btn3" href="home.php?logout='1'">logout</a> </p>


			<?php endif ?>
			<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success">
					<h3>
						<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
		</div>
	</main>
	<footer>
		<p>
			<a href="index.html">Home</a> | <a href="discover.html">Discover</a> |
			<a href="mypage.html">My Page</a> |
			<a href="features.html">Features</a> | <a href="help.html">Help</a> |
			<a href="aboutus.html">About</a> |
			<a href="status.html">Status</a>
			<p>© Copyright Collaby Company 2020 Collaby.com</p>
		</p>
	</footer>
</body>

</html>