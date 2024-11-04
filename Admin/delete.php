<?php
if (isset($_POST['delete_all'])) {
    // Database connection parameters
   require "admin_connect.php";

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Fetch all image paths from the database
    $sql1 = "SELECT image FROM image";
    $rs1 = mysqli_query($con ,$sql1);

    if (mysqli_num_rows($rs1)>0) {
        // Loop through each image path and delete the file
        while ($row=mysqli_fetch_assoc($rs1)) {
            $filePath = $row['image'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete all records from the database
        $sql2 = "DELETE image FROM image";
        $rs2 = mysqli_query($con ,$sql2);
        if ($rs2 === TRUE) {
            echo "All images deleted successfully.";
            header("location:show.php");
        } else {
            echo "Error deleting records: " . $con->error;
        }
    } else {
        echo "No images found in the database.";
    }

    // Close the database connection
    $con->close();
}



