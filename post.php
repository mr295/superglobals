<?php
//post method to get the input value
  if (isset($_POST['submit'])) {
    $example = $_POST['example'];
    $example2 = $_POST['example2'];
    echo $example . " " . $example2;//displays value
  }
?>

  <form action="" method="post">
  
  Example value 1: <input name="example" type="text" /> 
  Example value 2: <input name="example2" type="text" />

  <input name="submit" type="submit" />
</form>