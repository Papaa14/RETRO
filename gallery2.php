<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Gallery</title>
    <!-- Bootstrap & Font-Awesome CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="gallery.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" type='text/css'>
    <link rel="stylesheet" href="css/responsive.css" type='text/css'>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

    <!-- Google Webfont -->
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,700' rel="stylesheet" type='text/css'>

    <!-- js files & script -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/hover_pack.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
          event.preventDefault();
          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 1000);
        });
      });
    </script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/retina.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>


    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
      .card-body{
        display:inline-block;
        border:1px solid #ccc;
        padding: 10px;
        margin: 10px;
      }
      .card-body img{
        display: block;
        max-width: 100%;
        height: auto;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="images/logo.jpg" alt="">
            <h1>Gallery</h1>
          </div>
          <ul>
            <li><a href="gallery1.php">
                <i class="fas fa-briefcase"></i>
                <span class="nav-item">Online samples</span>
              </a>
            </li>
            <li><a href="gallery2.php">
                <i class="fas fa-briefcase"></i>
                <span class="nav-item">Uploads</span>
              </a>
            </li>
            <li><a href="home.php">
                <i class="fas fa-hand-o-left"></i>
                <span class="nav-item">Go back</span>
              </a>
            </li>

          </ul>
        </div>
      </nav>


      <section class="main">
        <div class="main-top">
          <p>Samples of Tattoos Online</p>
        </div>
        <div class="main-body">
          <h1>Recent arts</h1>
        </div>
        
                          <?php

                          $con = mysqli_connect('localhost', 'root', '', 'rettro');

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
                                    <img src="uploads/<?php echo $rows['image']; ?>" alt="" />
                                  </div>
                                </div>
                              </div>

                        

                          <?php

                            }
                          }

                           ?>
                        </div>   
                      </div>
                    </div>
          </div>
          </li>
          </ul>
        </div>
    </div>
    </div>
    </div>
    </section>
    </div>
  </body>

  </html>
</span>