<?php 
  	if(isset($_COOKIE['username'])){
  		echo 'USER'.$_COOKIE['username'] . 'is set ';
  	}
  else {
  		echo 'Not set !';
  	}


 ?>