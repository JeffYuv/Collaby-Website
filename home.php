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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery UI Resizable - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
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
				<li><a href="home.php">My Page</a></li>
				<li><a href="features.html">Features</a></li>
				<li><a href="help.html">Help</a></li>
				<li><a href="aboutus.html">About</a></li>
				<li><a href="status.html">Status</a></li>
			</ul>
			<a href="home.php"><button class="login login1">Login</button></a>
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
	<style>
		.resizable {
			width: 150px;
			height: 150px;
			padding: 0.5em;
			border: 0.5px solid black;
		}

		.resizable h3 {
			text-align: center;
			margin: 0;

		}

		.draggable {
			width: 150px;
			height: 150px;
			padding: 0.5em;
		}

		.img {
			background: url("https://www.w3schools.com/w3css/img_forest.jpg");
			background-repeat: no-repeat;
		}
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js">

	</script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">

	</script>
	<script>
		$(function() {
			$(".resizable").resizable({
				maxHeight: 300,
				maxWidth: 550,
				minHeight: 150,
				minWidth: 200
			});
		});
		$(function() {
			$(".draggable").draggable();
		});
	</script>
	<style>
		#mydiv {
			position: absolute;
			z-index: 9;
			background-color: #f1f1f1;
			text-align: center;
			border: 1px solid #d3d3d3;
		}

		#mydivheader {
			padding: 10px;
			cursor: move;
			z-index: 10;
			background-color: #2196F3;
			color: #fff;
		}
	</style>
	<h1>Collaby</h1>
	<h2>*The Chill Squad*</h2>

	<p>Welcome! to our the Collaby page, we mostly post about our favorite music, topics and hobbies.</p>


	<div id="mydiv">
		<div id="mydivheader">Click here to drag and move around</div>
		<iframe width="420" height="315" src="https://www.youtube.com/embed/a8q3Ea9GwXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture">
		</iframe>
	</div>

	<div class="resizable draggable" class="ui-widget-content">
		<h3 class="ui-widget-header">Resizable</h3>
	</div>

	<div class="resizable draggable img" class="ui-widget-content">
		<h3 class="ui-widget-header">Nature</h3>
	</div>



	<script>
		//Make the DIV element draggagle:
		dragElement(document.getElementById("mydiv"));


		function dragElement(elmnt) {
			var pos1 = 0,
				pos2 = 0,
				pos3 = 0,
				pos4 = 0;
			if (document.getElementById(elmnt.id + "header")) {
				/* if present, the header is where you move the DIV from:*/
				document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
			} else {
				/* otherwise, move the DIV from anywhere inside the DIV:*/
				elmnt.onmousedown = dragMouseDown;
			}

			function dragMouseDown(e) {
				e = e || window.event;
				e.preventDefault();
				// get the mouse cursor position at startup:
				pos3 = e.clientX;
				pos4 = e.clientY;
				document.onmouseup = closeDragElement;
				// call a function whenever the cursor moves:
				document.onmousemove = elementDrag;
			}

			function elementDrag(e) {
				e = e || window.event;
				e.preventDefault();
				// calculate the new cursor position:
				pos1 = pos3 - e.clientX;
				pos2 = pos4 - e.clientY;
				pos3 = e.clientX;
				pos4 = e.clientY;
				// set the element's new position:
				elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
				elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
			}

			function closeDragElement() {
				/* stop moving when mouse button is released:*/
				document.onmouseup = null;
				document.onmousemove = null;
			}
		}
	</script>
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