<?php 

  $loggedIn = true ;


  /*if($loggedIn){
  	echo 'You are logged in ';
  }else
  {
  	echo 'You are not logged in';
  }*/

  //echo ($loggedIn) ?'You are logged in ':'You are not logged in';

  
 //$isRegistered =($loggedIn==true)?true :false;
 //echo $isRegistered;


 //also can be naested (? :)






 ?>


<div>
 	<?php if($loggedIn) {?>
 	<h1>Welcome to ARA-FASION</h1>
 	<?php } else{ ?>
  <h1>WRONG password !</h1> 
  <?php } ?>  
 </div>


 <div>

 	<?php if($loggedIn): ?>
 		<h1>Welcome to ARA-FASION</h1>
 	<?php else: ?>
 		<h1>WRONG password !</h1>
 	<?php endif; ?>
 </div>