<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rettro";

$con = mysqli_connect("localhost","root","","rettro");


if(isset($_POST['login'])){
$username=$_POST['username'];
$type='admin';
$password=$_POST['password'];

$sql="SELECT * FROM users where username= '$username'";
$rs = mysqli_query($con ,$sql);

if (mysqli_num_rows($rs)>0) {
   while ($row=mysqli_fetch_assoc($rs)) {
      if (password_verify($password,$row['password'])) {
         $username= $row['username'];
         session_start();
         $_SESSION['username']=$row['username'];
         $_SESSION['type']=$row['type'];
         header("location:dashboard.php");
      }else {
        echo  "<script type= 'text/javascript'>";
        echo  "alert('invalid username or password');";
        echo  "location:admin.php";
        echo  "</script>";
     }
   }
}else {
    echo  "<script type= 'text/javascript'>";
    echo  "alert('invalid username or password');";
    echo  "location:admin.php";
    echo  "</script>";
 }
}