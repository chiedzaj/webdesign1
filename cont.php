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

	
<h1>Contact Us</h1>
  <p><h2>Feel free to express your concerns in relation to what we post!</h2></p>
<form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
  <p>
    <label form="name">Name:</label>
    <input type="text" name="name" id="name">
  </p>

  <p>
    <label form="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>

  <p>
    <label form="topic">Topic:</label>
    <input type="text" name="topic" id="topic">
  </p>

    
  <p>
    <label form="comments">Comments:</label> 
    <textarea name="comments" id="comments"></textarea>
  </p>

  <p>
    <input type="button" name="send" id="send" value="Send Comments">
  </p>
  </form>

	
</body>
	<footer>
		<p>All Rights Reserved,Teacher's Forum &copy; 2019</p>
	</footer>

</html>