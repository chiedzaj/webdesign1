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
	<title>our team page</title>
</head>
<body>
 
<section id="main">
			<div class="container">

	<article id="main-col">	
 	<div id="sidebar2">
							<div class="dark">
						<h3>What We Do</h3>
						<p>We try to improve the communication between us, the government, and our employees through the use of this platform.

						<img src="https://c8.alamy.com/comp/D47E5E/teacher-helps-south-african-school-children-on-laptops-during-a-computer-D47E5E.jpg" height="150" width="250">

						</p>
		</div>
	</div>
	</article>

</section>
	
</body>
	<footer>
		<p>All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>