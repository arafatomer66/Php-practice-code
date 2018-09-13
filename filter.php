<?php 
	
	/*if(filter_has_var(INPUT_POST, 'data'))
	{
 		echo 'Data found';
	}
	else
	{
		echo 'No Data';
	}


	if(filter_has_var(INPUT_POST, 'data')){

	$email = $_POST['data'];

    $email = filter_var($email,FILTER_SANITIZE_EMAIL);

    echo $email .'<br>' ;

 	if(filter_input(INPUT_POST, 'data',FILTER_VALIDATE_EMAIL))
 		{
 			echo 'Email is valid';
 		}

	else
		{
 			echo 'Email is NOT valid';
 		}
	

}

   //FILTER_VALIDATE_EMAIL,BOOLEAN,FLOAT,INT,TP,URLREGEX


 //FILTER_SANITIZE_EMAIL,ENCODED,NUMBER_FLOAT,NUMBER_INT,URL,SPECIAL_CHAR,STRING 
 //FILTER_SANITIZE_EMAIL,ENCODED,NUMBER_FLOAT,NUMBER_INT,URL,SPECIAL_CHAR,STRING */

	 $filters = array(
    
    "data" =>FILTER_VALIDATE_EMAIL,
    "data2" => array (
    
    	"filter" => FILTER_VALIDATE_INT,
    	"option" => array(

    		"max_range" =>100,
    		"min_range" => 1

    	)

    )

	 )		;


	 print_r(filter_input_array(INPUT_POST ,$filters))	;




 ?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	<label>Enter Your Email</label><hr>
	
	<input type="text" name="data" ><br>
	<input type="text" name="data2" ><br>
	<button type="submit">Submit</button>
</form>