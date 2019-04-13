<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="styles/stylee.css">
	<link rel="stylesheet" type="text/css" href="styles/styleee.css">

</head>
<body>
	<header>

		<div class="main">

	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About Us</a>
				<ul>
					<li><a href="team.php">Our Team</a></li>
					<li><a href="mission.php">Mission &amp; Vision</a></li>
					<li><a href="location.php">Location</a></li>
				</ul>	
			</li>
			<li><a href="news.php">News Room</a>
				<ul>
					<li><a href="gala.php">Sports Gala</a></li>
					<li><a href="pay.php">Pay Dates</a></li>
					<li><a href="seminar.php">Seminars</a></li>
					<li><a href="vac.php">Vacation School</a></li>
				</ul>
			</li>
			<li><a href="contact.php">Contact Us</a>
				<ul>
				<li><a href="cont.php">Contact details</a></li>
			</li>
		    </ul>
		</ul>
	</nav>

	<div id="content-area">
		<?php echo "$content"; ?>
	</div>	

	</div>
	</header>
	</body>


	

</html>