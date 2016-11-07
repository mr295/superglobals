<?php 
  
  $x = 200; //constant 
  $y = 500; //constant
  
  //addition function 
  function addition() { 
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; //storing the global variables in an array
  }
 
  addition(); //calls addition function
  echo $x. "+". $y;
  echo "<br> Total Value = ". $z; //Displyas total value
?>