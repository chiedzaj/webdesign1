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
	<title>pay dates page</title>
	
	<link rel="stylesheet" type="text/css" href="styles/stylee.css">
	<link rel="stylesheet" type="text/css" href="styles/styleee.css">
</head>
<body>

	<h2>Pay Dates for the first term</h2>
								<p><h5>We have designated the following dates to be your pay dates. An changes made will be announced in due course. 
									January:<br>
									February:<br>
									March:<br>
									April:<br>
									We have since realised that due to the lack of communication between us, the government and you, our employees, there seem to be many grievances pertaining to this so we kindly ask you to communicate with us through this platfor by making use of the provided contact details.</h5><br>
								
							<img src="http://zimbabwe-today.com/wp-content/uploads/2018/05/n53.jpg" width="200" height="200">
								</p>
							

</body>

<footer>
	<p>Copyright, All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>
</html>