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
	<title>Sport gala page</title>
	<link rel="stylesheet" type="text/css" href="styles/stylee.css">
	<link rel="stylesheet" type="text/css" href="styles/styleee.css">
</head>
<body>
						
							<h2>Sports Gala</h2>
								<p><h2>For term our sports will be held on the following days:</br>
									Zonals:</br>
									District Games:<br>
									Provincials:<br>
									Nationals:<br>
									Please be advised that all the participants should have a birth certificate or valid passport for those under the age of 16 and a National ID for those that are 16 and above. For each of the categories<b><i>(under 14, under 16, under 18, under 20)</i></b>, only the students who are in the age range will participate otherwise they will face a disqualification.</h2> <br>

							<img src="http://atlantablackstar.com/wp-content/uploads/2014/07/south-african-school.jpg" width="200" height="200">
							</p>
                          
</body>

<footer>
		<p>All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>


</html>