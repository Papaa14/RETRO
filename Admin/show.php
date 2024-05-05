<?php
require 'admin_connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View image</title>
  </head>
  <body>
    <table >
      <?php
      
      $sql = "SELECT * FROM book";
      $rs=mysqli_query($con,$sql);

      while ($row = mysqli_fetch_assoc($rs))
      {

               
       
        echo "<img src='image/'";

      }

         ?>
      
      
            
         
        
     
      
<br><a href="bookings.php">Go Back</a></br>

  </body>
</html>