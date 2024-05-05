<?php


if(isset($_POST["submit"])){
  $target_Folder = 'uploads/'; // Folder to save uploaded images
  $totalFiles = count($_FILES['image']['name']);
  for ($i = 0; $i < $totalFiles; $i++) {
    $file_name = $_FILES['image']['name'][$i];
    
   
}
 
 
  
  if (file_exists('uploads/' . $file_name)) {
      echo "That file already exists.";
  } else {
      // Database connection
      $con = mysqli_connect("localhost", "root", "", "rettro");
      if (mysqli_connect_errno()) {
          echo "Failed to connect to the database: " . mysqli_connect_error();
      }
  
      // Insert image details into the database
      $sql="INSERT INTO image(image)VALUES('$file_name')";
      if (!mysqli_query($con, $sql)) {
          die('Error: ' . mysqli_error($con));
      }
      echo "1 record added successfully in the database.";
  
      // Move the uploaded file to the specified folder
      $target_Path = $target_Folder . basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'], $target_Path);
      echo "Files uploaded successfully to: $target_Path";
      header("location:dashboard.php");
     
  }
}

  ?>

     

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RETTRO INK </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Images\LOGO.png" rel="icon">
  <link href="Images\LOGO.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

 <!--Font Awesome Icons-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

 
<form action="" method="post" enctype="multipart/form-data">
  <main id="main" class="main">

    <section class="section">
    <div class="container">
        <input type="file" id="file-input" name="image" accept="image/png, image/jpeg" onchange="preview()" multiple>
        <label for="file-input">
            <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>
        <p id="num-of-files">No Files Chosen</p>
        <div id="images"></div>
        <input type="submit"  name="submit" value="Upload" class="submit-btn"></br>
    </div>
    
                  </tr>
                </thead>
                <tbody>
                  
  
                </tbody>
              </table>
            

            </div>
          </div>

          
        </div>
      </div>
      
</section>
</main><!-- End #main -->
</form>

  

<script>
  let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview(){
    imageContainer.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}
</script>
</body>
</HTML>







