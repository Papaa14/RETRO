<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $description=$_POST['description'];
    $date=$_POST['date'];
   // Folder to save uploaded images
    $file_name = $_FILES['image']['name'];
    
    if (file_exists('image/' . $file_name)) {
        echo "That file already exists.";
    } else {
        // Database connection
        $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to the database: " . mysqli_connect_error();
        }
    
        // Insert image details into the database
        $sql="INSERT INTO book(username,description,image,date)VALUES('$username','$description','$file_name','$date')";
        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "1 record added successfully in the database.";
    
        // Move the uploaded file to the specified folder
        $target_Path = $target_Folder . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_Path);
        echo "File uploaded successfully to: $target_Path";
        header("location:home.php");
    }
  }
    ?>

      
<!DOCTYPE html>
<html>
<head>
    <title>Bookings</title>
    <link rel="stylesheet" href="book.css">  
</head>    
<body>
    <div class="container">
    
    <form action="" method="post" enctype="multipart/form-data">
        
            <div class="row">
                <div class="col">
                    <h3 class="title">Book A session</h3>
                    <div class="inputBox">
                        <span>username:</span>
                        <input placeholder="username" name="username" class="input">
                    </div>
                    <div class="inputBox">
                        <span>description:</span>
                        <select id="options" name="description">
                            <option value="Tatto">Tatoo</option>
                            <option value="Piercing">Piercing</option>                            
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>Image:</span>
                        <input type="file" name="image" id="image-input" accept="image/*"  >
                        <img id="preview">
                    </div>
                    
                    <div class="inputBox">
                        <span>Date:</span>
                        <input type="date" name="date" placeholder="january" class="input">
                    </div>
            <br>
            </div>
        </div>
        <br><input type="submit"  name="submit" value="Upload" class="submit-btn"></br>
     </form>
    </div>
  
    <script>
        const imgInput = document.getElementById('image-input');
        imgInput.addEventListener('change', function (e) {
            if (e.target.files) {
                const imageFile = e.target.files[0];
                const reader = new FileReader();

                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.onload = function () {
                        // Create a canvas element
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');

                        // Resize the image (adjust dimensions as needed)
                        const newWidth = 100;
                        const newHeight = 100;
                        canvas.width = newWidth;
                        canvas.height = newHeight;
                        ctx.drawImage(img, 0, 0, newWidth, newHeight);

                        // Show resized image in the preview element
                        const dataUrl = canvas.toDataURL(imageFile.type);
                        document.getElementById('preview').src = dataUrl;
                    };

                    img.src = e.target.result;
                };

                reader.readAsDataURL(imageFile);
            }
        });
</script>
       
    
</body>
</html>