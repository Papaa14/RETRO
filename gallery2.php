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
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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

          </ul>
        </div>
      </nav>


      <section class="main">
        <div class="main-top">
          <p>Art by Retroink Tattoos</p>
        </div>
        <div class="main-body">
          <h1>Recent arts</h1>
        </div>
        <div class="container-fluidgallery wow fadeInDown" data-wow-delay="0.0s" id="gallery">          
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-two-row-two wow fadeInLeft">
                <ul class="gallery-grid-two gallery-grid-box">
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 1 -->
                      <img src="images/gallery-two-img1.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-1.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 2 -->
                      <img src="images/gallery-two-img2.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-2.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 3 -->
                      <img src="images/gallery-two-img3.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-3.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 4 -->
                      <img src="images/gallery-two-img4.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-4.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 5 -->
                      <img src="images/gallery-two-img5.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-5.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-two-row-three wow fadeInRight">
                <ul class="gallery-grid-three gallery-grid-box">
                  <li class="mobile-display-off">
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 6 -->
                      <img src="images/gallery-two-img6.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-6.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 7 -->
                      <img src="images/gallery-two-img7.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-7.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 8 -->
                      <img src="images/gallery-two-img8.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-8.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 9 -->
                      <img src="images/gallery-two-img9.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-9.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 10 -->
                      <img src="images/gallery-two-img10.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-10.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 11 -->
                      <img src="images/gallery-two-img11.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-11.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 12 -->
                      <img src="images/gallery-two-img12.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-12.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 13 -->
                      <img src="images/gallery-two-img13.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-13.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 14 -->
                      <img src="images/gallery-two-img14.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-14.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 15 -->
                      <img src="images/gallery-two-img15.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-15.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 16 -->
                      <img src="images/gallery-two-img16.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-16.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 17 -->
                      <img src="images/gallery-two-img17.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-17.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 18 -->
                      <img src="images/gallery-two-img18.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-18.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 19 -->
                      <img src="images/gallery-two-img19.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-19.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 20 -->
                      <img src="images/gallery-two-img20.jpg" class="gallery-two-image img-responsive" alt="" />
                      <div class="b-wrapper">
                        <div class="b-animate b-from-left b-delay03 ">
                          <a href="images/photo-gallery/image-20.jpg" rel="prettyPhoto[pp_gal]">
                            <button class="zooming md-trigger">
                              <img src="images/zoom.png" alt="" />
                            </button>
                          </a>
                          <ul class="popup_links gallery-two-popup-links">
                            <li><button><i class="link"></i></button></li>
                            <li><button><i class="info"></i></button></li>
                            <li><button><i class="like"></i></button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </section>
    </div>
  </body>
  </html>
</span>