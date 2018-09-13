<?php 
   
   $msg = '';
   $msgClass =  '';

   if (filter_has_var(INPUT_POST,'submit'))
   {
     
    $name = htmlspecialchars($_POST['name']);
    $email =htmlspecialchars($_POST['email']);
    $message =htmlspecialchars($_POST['message'];


   if(!empty($email) && !empty($name) && !empty($message) ){

   	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){

   	}


   
     
   }


   }else
   {
   	$msg = 'Please Fill in all Fields';
   $msgClass =  'alert-danger';

   }
    
     


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Contact Arafat</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	<style type="text/css">
		#a {
			background-color: black;

		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container" id="a">
		 	<div class="navbar_header">
				<a class="navbar-brand" href="index.php" ><h1>My Website</h1></a>
		 	</div>
		</div>
	</nav>

	<div class="container">

		<?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name'])? $name :''; ?>">
			
		</div>

		<div class="form-group">
			<label for="">E-mail</label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email'])? $email :''; ?>">
			
		</div>

		<div class="form-group">
			<label for="">Message</label>
			<textarea class="form-control" name="message" value="<?php echo isset($_POST['message']) ? $message :''; ?>"></textarea>
			
		</div>
		<br>

		<button class="btn btn-primary" type="submit" name="submit"  >Submit</button>
		</form>	
	</div>
</body>
</html>