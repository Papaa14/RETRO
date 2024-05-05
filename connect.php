<?php
if(isset($_POST['submit'])){

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rettro";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);


$username = $_POST['username'];
$password=$_POST['password'];
$hash=password_hash($password, PASSWORD_DEFAULT);


$sql="INSERT INTO users(username,password)VALUES('$username','$hash')";


$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"REGISTRATION  SUCCESSFULLY";
  } 

  mysqli_close($con);
header ("location:login.php");
}
