<?php

include 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="login.php" method="post">
      <h3>login now</h3>
	  <input type="text" name="username" required placeholder="enter your username">      
      <input type="password" name="password" required placeholder="enter your password" >
      <input type="submit" name="login" value="login" class="form-btn"  >
      <p>don't have an account? <a href="signup.php">register now</a></p>
   </form>

</div>
<?php


if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users where username= '$username'";
$rs = mysqli_query($con ,$sql);

if (mysqli_num_rows($rs)>0) {
   while ($row=mysqli_fetch_assoc($rs)) {
      if (password_verify($password,$row['password'])) {
         $username= $row['username'];
         session_start();
         $_SESSION['username']=$row['username'];
         header("location:home.php");
      }else {
        echo  "<script type= 'text/javascript'>";
        echo  "alert('invalid username or password');";
        echo  "location:login.php";
        echo  "</script>";
     }
   }
}else {
    echo  "<script type= 'text/javascript'>";
    echo  "alert('invalid username or password');";
    echo  "location:login.php";
    echo  "</script>";
 }
}
?>

</body>
</html>
