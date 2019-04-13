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

				</article>	
			</div>
</section>		

	<div id="sidebar2">
					<div class="dark">
						<h3>What We Do</h3>
						<p>We try to improve the communication between us, the government, and our employees through the use of this platform./</p>
					</div>
	
	</div>
		
</body>
	<footer>
		<p>All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>