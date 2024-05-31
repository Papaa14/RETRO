<?php

include 'admin_connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   
<div class="form-container">

   <form action="admin_process.php" method="post">
      <h3>Administrator Login</h3>
	  <input type="text" name="username" required placeholder="enter your username">      
      <input type="password" name="password" required placeholder="enter your password" >
      <input type="submit" name="login" value="login" class="form-btn"  >
      
   </form>

</div>


</body>
</html>
