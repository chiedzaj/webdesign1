<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

 $title = "";
 $content = "";

 include 'template.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

	<link rel="stylesheet" type="text/css" href="stylee.css" >
	<link rel="stylesheet" type="text/css" href="styleee.css" >
</head>	

<body>
	<header>
<!--
	<p align = "center">
	<marquee direction = "up">
		<h1><b><i>WELCOME <?php echo $_SESSION['username']; ?></i></b></h1>
	</marquee>
	</p align>

-->

	<div class="container">
	<div id = "wrapper">
	<a class="float-left" href="logout.php">LOGOUT </a>
	 
	
	</div>
	
	</div>
	</header>
</body>

	<footer>
		<p>Copyright,All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>