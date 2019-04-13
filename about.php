<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:home.php');
}

 $title = "";
 $content = "";

 include 'template.php';

?>

<!Doctype>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="teachers' forum">
		<meta name="keywords" content="web design, teacher and government communicative forum">
		<meta name="author" content="CHIEDZA MUDANGWE">
		<title>About Us</title>
		<link href="stylee.css" rel="stylesheet" type="text/css"><link href="styleee.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<section id="main">
			<div class="container">

<!--

				<article id="main-col">
				<h1 class="page title">About Us</h1>
					<p><h5>We cannot welcome you enough to our website where we will be communicating. This will be done mainly through the use of the news room where we will post certain dtes for</h5></p>
					<p><h5>In pursuit to become a society of proficient userd and inovators of Information and Communication Technology to propel social and economic development, the Government through the Ministry of Education has instituted an e-Government programme to avail government information and services pertaining the education sector online. We are quite hopefull that this will significantly improve the communication between us and you, our teachers across the nation.</h5></p>

					<h5><p class="dark">We strive to exploit all appropriate e-communication platforms to provide you with news and information in a timeous manner. For further details you can contact us using the details given in one of the pages.</p></h5>
				</article>	
				
				<div id="sidebar2">
							<div class="dark">
						<h3>What We Do</h3>
						<p>We try to improve the communication between us, the government, and our employees through the use of this platform.

						<img src="https://c8.alamy.com/comp/D47E5E/teacher-helps-south-african-school-children-on-laptops-during-a-computer-D47E5E.jpg" height="150" width="250">

						</p>
-->
						
					</div>
				</div>
			</div>
		</section>
		
	</body>
	<footer>
		<p>All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

	
</html>