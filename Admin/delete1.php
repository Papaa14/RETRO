<?php

if (isset($_GET['id'])) {
    $id =$_GET['id'];

   
    
    // Database connection parameters
     require "admin_connect.php";

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    // Delete all records from the database
    $sql = "DELETE FROM book WHERE id = $id";
    $rs = mysqli_query($con ,$sql);
    if ($rs === TRUE) {
            echo "Record deleted successfully.";
            header("location:bookings.php");
        } else {
            echo "Error deleting records: " . $con->error;
        }
        

    // Close the database connection
    $con->close();
}else{
    echo " No record found";

}




