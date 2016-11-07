<?php
  
  //$_SERVER 
  
  //Returns the filename of the currently executing script 
  echo $_SERVER['PHP_SELF'];
  echo "<br><br>";
  
  //Returns the name of the host server
  echo $_SERVER['SERVER_NAME'];
  echo "<br><br>";
  
  //Returns the Host header from the current request
  echo $_SERVER['HTTP_HOST'];
  echo "<br><br>";
  
  //Returns the complete URL of the current page 
  echo $_SERVER['HTTP_REFERER'];
  echo "<br><br>";
  
  //header from the current request(browser)
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br><br>";
  
  //Returns the path of the current script
  echo $_SERVER['SCRIPT_NAME'];
?>