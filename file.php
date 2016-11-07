<html>
<body>    
<?php
//to upload the files
  $filename = $_FILES['image']['name'];
  move_uploaded_file($_FILES ['image']['tmp_name'],"uploads/".$filename); //moves it to the upload folders
  
?>

  <form action="" method="post" enctype="multipart/form-data">
    <input type = "file" name = "upload" /> <br/>
    <input type = "submit" value = "submit"  name = "btn" />
  </form>
</body>
</html>  