<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Images\LOGO.png" rel="icon">
  <link href="Images\logo.png" rel="icon">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .col-md-3 {
      display: inline-block;
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
    }

    .col-md-3 img {
      display: block;
      max-width: 100%;
      height: auto;      
    }
    .button{
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      text-align: center;
      text-decoration: none;
      border: 2px solid #007bff;
      border-radius: 4px;
      transition: background-color 0.3s ,color0.3s;

    }
    .button:hover{
      background: color #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>

<body>

  <?php include('sidebar.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tattoo Bookings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Uploads</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Uploaded Images</h5>

              <table class="table table-hover">
                <tbody>

                  <?php
                   require "admin_connect.php";

                  if (!$con) {

                    echo "Something went wrong with database connection";
                  }

                  $sql = "SELECT image FROM image";
                  $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {

                    while ($rows = mysqli_fetch_assoc($result)) {

                  ?>

                      <div class="col-md-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="../uploads/<?php echo $rows['image']; ?>" alt="" />
                          </div>
                        </div>
                      </div>

            </div>

        <?php

                    }
                  }

        ?>
        </tbody>
        </table>


          </div>
        </div>


      </div>
      </div>
      <form action="delete.php" method="post">
        <div class="btn-container">
          <button type="submit" class="button" name="delete_all">Delete All Images</button>
          <a href="images.php" class="button">Upload images</a>
        </div>
      </form>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      <div class="credit"> ©2024 Retro Ink. All Right Reserved. Developed by calvinmangi627@gmail.com </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>