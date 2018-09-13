<?php 
  
  //superglobal
	 
	 // create server array
     $server = [
    
    'Host Server Name ' =>$_SERVER['SERVER_NAME'],
 'Host header '=>$_SERVER['HTTP_HOST'],
 'Server Id' =>$_SERVER['SERVER_SOFTWARE'],
 'Domain root' =>$_SERVER['DOCUMENT_ROOT'],
 'Current page'=>$_SERVER['PHP_SELF'] ,//SCRIPPT NAME
'Absulate path' => $_SERVER['SCRIPT_FILENAME']


     ];

 //    print_r($server);

	// clicnt array



     $client = [

'Client system info'=>$_SERVER['HTTP_USER_AGENT'],
'client ip' =>$_SERVER['REMOTE_ADDR'],
'REMOTE PORT'=>$_SERVER['REMOTE_PORT']




  
     ];
//print_r($client);

 ?>