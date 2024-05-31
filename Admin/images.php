<?php


if (isset($_POST["submit"])) {


  for ($i = 0; $i < count($_FILES['file_img']['name']); $i++) {
    $filetmp = $_FILES["file_img"]["tmp_name"][$i];
    $filename = $_FILES["file_img"]["name"][$i];
    $filetype = $_FILES["file_img"]["type"][$i];
    $filepath = '../uploads/' . $filename;


    $con = mysqli_connect("localhost", "root", "", "rettro");

    $sql = "INSERT INTO image(image)VALUES('$filename')";
    $rs = mysqli_query($con, $sql);


    move_uploaded_file($filetmp, $filepath);

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
  <style>
    .submit-btn {
      display: inlin;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      text-align: center;
      text-decoration: none;
      border: 2px solid #007bff;
      border-radius: 4px;
      transition: background-color 0.3s, color0.3s;
      gap: 20px;

    }

    .submit-btn:hover {
      background: color #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>

<body>


  <form action="" method="post" enctype="multipart/form-data">
    <main id="main" class="main">

      <section class="section">
        <div class="container">
          <input type="file" id="file-input" name="file_img[]" accept="image/png, image/jpeg" onchange="preview()" multiple>
          <label for="file-input">
            <i class="fas fa-upload"></i> &nbsp; Choose A Photo
          </label>
          <p id="num-of-files">No Files Chosen</p>
          <div id="images"></div>
          <input type="submit" name="submit" value="Upload" class="submit-btn"></br>
          <a href="show.php" class="submit-btn"> View Uploads</a><br>
          <a href="dashboard.php" class="submit-btn">Go back</a>

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

    function preview() {
      imageContainer.innerHTML = "";
      numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

      for (i of fileInput.files) {
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figCap = document.createElement("figcaption");
        figCap.innerText = i.name;
        figure.appendChild(figCap);
        reader.onload = () => {
          let img = document.createElement("img");
          img.setAttribute("src", reader.result);
          figure.insertBefore(img, figCap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
      }
    }
  </script>
</body>

</HTML>