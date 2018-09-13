<?php 

	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

 ?>

<!DOCTYPE html>
<html >
<head>
	
	<title>PHP session</title>
</head>
<body>
	<h5>Thank you ! <?php echo $name; ?> Your Email is <?php echo $email; ?></h5>
	<a href="page3.php" >Go to your home page ! </a>
	
</body>
</html>