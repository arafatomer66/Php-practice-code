<?php 

  //echo date('Y/m/d');
  // m-month

//y -year
//   d - day
//   I - day od the week
  //

  
  //echo date('h-i-sa');//hour mint send a-am


  $timestamp = mktime(10,14,54,9,10,1982);


  echo date('Y/m/d h-i-sa' , $timestamp)


  //strptotime - convert into stamp
  // strtotime ('tommorrow .next ..')
 ?>
