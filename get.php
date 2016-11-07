<?php
//gets the web page
   $varPage = $_GET['page'];
    
   $varPrevious = $_GET['page'] - 1; //gets the previous page
   $varNext = $_GET['page'] + 1; //gets the next page
   
?> 
<p>
<a href="server.php?page=<?=$varPrevious;?>">Previous</a> //links
<a href="globals.php?page=<?=$varNext;?>">Next</a> //links
</p>