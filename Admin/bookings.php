<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bookings</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
          <li class="breadcrumb-item active">tattoo bookings</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tattoo Bookings</h5>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Operation</th>

                  </tr>
                </thead>
                <tbody>

                  <?php
                  require "admin_connect.php";


                  if (!$con) {

                    echo "Something went wrong with database connection";
                  }

                  $sql = "SELECT id,username,description,image,date FROM book";
                  $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {

                    while ($rows = mysqli_fetch_assoc($result)) {

                  ?>
                      <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['description']; ?></td>
                        <td><?php echo '<img src="../image/' . $rows['image'] . '" alt="images" height=100px width=100px>'; ?></td>
                        <td><?php echo $rows['date']; ?></td>
                        <td><a href=<?php echo "delete1.php?id=".$rows["id"] ?>>Delete Record</a></td>                       
                       
                        

                      </tr>
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