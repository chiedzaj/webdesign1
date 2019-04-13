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
	<title>news room page.</title>
	<link href="stylee.css" rel="stylesheet" type="text/css">
  	<link href="styleee.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>

<!--

	<h1>News Room</h1>
	<h2>These are the announcements we have for the first term starting on <b>January 8  2019- April 11 2019</b><br>
		We hope you have an enjoyable one as you get reunited with your students</h2>
	</header>

		<section id="main">
			<div class="container">
				<article id="main-col">
					<ul id="services">
						<li>
							<h2>Sports Gala</h2>
								<p><h5>For term our sports will be held on the following days:</br>
									Zonals:</br>
									District Games:<br>
									Provincials:<br>
									Nationals:<br>
									Please be advised that all the participants should have a birth certificate or valid passport for those under the age of 16 and a National ID for those that are 16 and above. For each of the categories<b><i>(under 14, under 16, under 18, under 20)</i></b>, only the students who are in the age range will participate otherwise they will face a disqualification.</h5> <br>

							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">
							</p>

							<li>
							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="800" height="450">
						</li>
	
						<li>
							<h2>Pay Dates for the first term</h2>
								<p><h5>We have designated the following dates to be your pay dates. An changes made will be announced in due course. 
									January:<br>
									February:<br>
									March:<br>
									April:<br>
									We have since realised that due to the lack of communication between us, the government and you, our employees, there seem to be many grievances pertaining to this so we kindly ask you to communicate with us through this platfor by making use of the provided contact details.</h5><br>
								
							<img src="http://zimbabwe-today.com/wp-content/uploads/2018/05/n53.jpg" width="200" height="200">
								</p>
								
						</li>
						
						<li>
							<h2>Seminars</h2>
								<p><h5>Teachers who are taking exam classes are advised to organise seminars in their regions where students can exchange ideas about how to tackle different exam questions.<br>
								This is to enhance their skills before they sit for their exams.<br>
								<b>Notice: Examiners are not allowed to share exam content during these serminars. Should any case be reported, the students will have to write another exam or be totally disqualified.!!</b></h5> <br>
								
							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">
								</p>
					

					<li>
							<h2>Vacation School</h2>
								<p><h5> For the time being, holiday lessons have also been put on hold due to different reasons. However, any school that may want to conduct such lessons has to write a letter with valid reasons as to why they should conduct one.<br>
								<b>Should any school conduct holiday lessons without government permission, a fine will have to be paid</b></h5> <br>
							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">

							</p></li>

					</ul>			
				</article>	
			</div>
		</section>
	<div id="sidebar2">
					<div class="dark">
						<h3>What We Do</h3>
						<p>We try to improve the communication between us, the government, and our employees through the use of this platform./</p>
					</div>
	
	</div>
-->

	<footer>
	<p>Copyright, All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>
</body>

</html>
