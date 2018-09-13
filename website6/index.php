<!DOCTYPE html>
<html >
<head>
	
	<title>User Search </title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	<script>
	 function showSugesstion(){
	 	if(str.length == 0){
	 		document.getElementById('output').innerHTML = '';
	 	}else 
	 	{

	 	}
	 }


	</script>
</head>
<body>
     <div class="container">
     <h1> Search Users </h1>
	     <form >
	     	Search User : <input type="test" class="form-control" onkeyup="showSugesstion(this.value)">


		 </form>
		     <p> Sugesstions: <span id="output" style="font-weight: bold" ></span> </p>
	 </div>
	
</body>
</html>