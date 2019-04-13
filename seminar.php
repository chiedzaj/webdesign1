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
	<title>seminar page</title>
</head>
<body>

	<h2>Seminars</h2>
								<p><h5>Teachers who are taking exam classes are advised to organise seminars in their regions where students can exchange ideas about how to tackle different exam questions.<br>
								This is to enhance their skills before they sit for their exams.<br>
								<b>Notice: Examiners are not allowed to share exam content during these serminars. Should any case be reported, the students will have to write another exam or be totally disqualified.!!</b></h5> <br>
								
							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">
								</p>
</body>


	<footer>
	<p>Copyright, All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>