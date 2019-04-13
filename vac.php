<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:home.php');
}

 $title = "";
 $content = "";

 include 'template.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/stylee.css">
	<link rel="stylesheet" type="text/css" href="styles/styleee.css">
</head>
<body>
			<article>
			<h2>Vacation School</h2>
								<p><h5> For the time being, holiday lessons have also been put on hold due to different reasons. However, any school that may want to conduct such lessons has to write a letter with valid reasons as to why they should conduct one.<br>
								<b>Should any school conduct holiday lessons without government permission, a fine will have to be paid</b></h5> <br>
							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">

							</p></li>
			</article>

</body>

	<footer>
	<p>Copyright, All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>	