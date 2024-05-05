<?php
if(isset($_POST['submit'])){

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rettro";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);


$username = $_POST['username'];
$description=$_POST['description'];
$image=$_FILES['image']['image'];
$date=$_POST['date'];

$sql="INSERT INTO book(username,description,image,date)VALUES('$username','$description','$image','$date')";
$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"BOOKING  SUCCESSFULLY";
  } 

  mysqli_close($con);
header ("location:home.php");
}
?>