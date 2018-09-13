<?php 
	if(isset($_GET['name']  )){
	//print_r($_POST);
	$name =htmlentities($_GET['name']);
	echo $name ;
    }
    //GET ,POST, REQUEST
 ?>
 

<!DOCTYPE html>
<html >
<head>
	
	<title>My Website</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		
	
	<form method="GET" action="get_post.php">
		<div >
			<label>
			Names
			</label>

		<br>
			<input type="text" name="name" placeholder="Name">
		</div>

		<br>

		<div >
			<label>
			E-mail
			</label>

		<br>
			<input type="text" name="email" placeholder="Email">
		</div>

		<br>

		<div >
			<input class="btn btn-primary" 
			type="submit" value="Submit"  >
		</div>
		
	</form>

	<ul>
		<li>
			<a href="get_post.php?name=arafat"></a>arafat
		</li>
		<li>

			<a href="get_post.php?name=laviv"></a>labib
		</li>
	</ul>

	<h1><?php echo "{$name}'s Profile"; ?>
	</h1>

	</div>
</body>
</html>