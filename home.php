<?php 


	include 'connection.php';
	include 'top_menu.php';
	

?>

<!DOCTYPE HTML>
<html>
		<head>
		
		    <meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="RETTO_INK TATTOO.Get yourself an art on your body.">

			<!-- Title -->
			<title>RETRRO_INK TATTOO </title>
			
			<!-- Bootstrap & Font-Awesome CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>
			<link rel="stylesheet" href="css/font-awesome.min.css" type='text/css'>
			
			<!-- Custom CSS -->
			<link rel="stylesheet" href="css/style.css" type='text/css'>
			<link rel="stylesheet" href="css/prettyPhoto.css" type='text/css'>
			<link rel="stylesheet" href="css/responsive.css" type='text/css'>
			
			<!-- font awesome cdn link  -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
			
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
			
		</head>
		<body>
		
            <header id="header"> <!-- Header Part -->
			
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			<h2 class="w3-validation">For W3 Validation</h2>
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			
					<div class="header">
						<div class="container">
								<!-- start-top-nav -->
							
									<nav class="nav">
										<a id="menu-toggle" class="anchor-link" href="#"><img src="images/nav.png" alt="navbar" /></a>
										<ul class="nav-list" id="menu">
											<li><a href="#home">Home</a></li>
											<li><a href="#about" class="scroll">About</a></li>	
											<img src="images/logo.jpg" class="img" alt=""/>																
											<li><a href="gallery.php" class="btn">Gallery</a></li>
											<li><a href="#contact" class="scroll">Contact</a></li>
											</subnav>
											
										</ul>
									</nav>
									<script type="text/javascript">
										  $(document).ready(function() {
										
											$('#menu-toggle').click(function () {
											  $('#menu').toggleClass('open');
											  e.preventDefault();
											});
											
										});
									</script>
								</div>
							<!-- End-top-nav -->
						</div>
					</div>
			</header>
			
            <section id="about-section"> <!-- About Section -->
			
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			<h2 class="w3-validation">For W3 Validation</h2>
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			
					<div class="container-fluid">  
						<div class="row" id="about">
							<div class="col-md-6 about_left">
							     <a href="#" class="button-one about_btn button-type-one button-box">About Us</a>
							</div>
							<div class="col-md-6 about_right wow fadeInUp" data-wow-delay="0.0s">
								  <div class="about_text">
										<img src="images/tatto.png" class="img-responsive" alt=""/>
										<h3>Welcome all to our site.</h3>
										<p>We tend to continue the love of art, getting to discover the design/drawing you need.   </p>
										<p>All workings will be done in our place of work, hope to see you soon.</p>
								  </div>
							</div>
						</div> 
					 
					</div>  
            </section>

          

		   </section>
			
			<section id="testimonial-section"> <!-- Testimonial Section -->
			
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			<h2 class="w3-validation">For W3 Validation</h2>
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			
					 <div class="testimonial wow bounceIn" data-wow-delay="0.0s" id="faq">
							<div class="container">
									<div class="row">
									    <div class="test_wrap">
											<p><span class="quotes"></span>Allday everyday bold will hold.<span style='font-size: 50px;'>&#128170;</span><span class="quotes-down"></span></p>
											<h4>- Eugene Matini -</h4>
											<div class="clearfix"> </div>
									    </div>
									</div>
							</div>
                     </div>
			</section>
			
			
	
			
			<section id="gallery-two-image-section"> <!-- Gallery Two Section -->
			
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			<h2 class="w3-validation">For W3 Validation</h2>
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			
				<div class="container-fluidgallery wow fadeInDown" data-wow-delay="0.0s" id="gallery">
					        <div class="row">
								    <div class="gallery-title">
									    <a href="#" class="button-one gallery_btn button-type-one button-box">Gallery</a>
								    </div>
									<div class="gallery-two-row-one">
											<ul class="gallery-grid-one gallery-grid-box">
												<li>
													<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 1 -->
															<img src="images/gallery-two-img1.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
																<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-1.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
															<img src="images/gallery-two-img2.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
																<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-2.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																				<img src="images/zoom.png" alt=""/>
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
															<img src="images/gallery-two-img3.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
																<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-3.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																				<img src="images/zoom.png" alt=""/>
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
											<div class="clearfix"></div>
									</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
								    <div class="gallery-two-row-two wow fadeInLeft">
									    <ul class="gallery-grid-two gallery-grid-box">
										    <li>
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 4 -->
													    <img src="images/gallery-two-img4.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-4.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																				<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img5.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-5.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																				<img src="images/zoom.png" alt=""/>
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
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 6 -->
													    <img src="images/gallery-two-img6.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																	<a href="images/photo-gallery/image-6.jpg" rel="prettyPhoto[pp_gal]">
																		<button class="zooming md-trigger">
																				<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img7.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-7.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img8.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-8.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											
											<!-- Only For Mobile -->
											<li class="mobile-display-on">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 9 -->
													    <img src="images/gallery-two-img9.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-9.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											<!-- Only For Mobile -->
											
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="gallery-two-row-three wow fadeInRight">
									    <ul class="gallery-grid-three gallery-grid-box">
										    <li class="mobile-display-off">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 9 -->
													    <img src="images/gallery-two-img9.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-9.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img10.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
															<a href="images/photo-gallery/image-10.jpg" rel="prettyPhoto[pp_gal]">
															    <button class="zooming md-trigger">
																        <img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img11.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-11.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img12.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-12.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img13.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-13.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											
											<!-- Only For Mobile -->
											<li class="mobile-display-on">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 14 -->
													    <img src="images/gallery-two-img14.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-14.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											<li class="mobile-display-on">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 15 -->
													    <img src="images/gallery-two-img15.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-15.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											<!-- Only For Mobile -->
											
										</ul>
										 <div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="gallery-two-row-four wow fadeInUp">
									    <ul class="gallery-grid-four gallery-grid-box">
										    <li class="mobile-display-off">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 14 -->
													    <img src="images/gallery-two-img14.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-14.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
											<li class="mobile-display-off">
												<div class="b-link-stripe b-animate-go thickbox"> <!-- Gallery image no : 15 -->
													    <img src="images/gallery-two-img15.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-15.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img16.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-16.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img17.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-17.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
													    <img src="images/gallery-two-img18.jpg" class="gallery-two-image img-responsive" alt=""/>
														<div class="b-wrapper">
															<div class="b-animate b-from-left b-delay03 ">
																<a href="images/photo-gallery/image-18.jpg" rel="prettyPhoto[pp_gal]">
																	<button class="zooming md-trigger">
																			<img src="images/zoom.png" alt=""/>
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
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="md-overlay"></div><!-- the overlay element -->
		
				</div>
			</section>
		<section id="book-session">
		<div class="book">
   			         <a href="booking.php" class="book_btn ">Book A Session</a>
		</section>
			

			<section id="contact-section"> <!-- Contact info Section-->
			
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			<h2 class="w3-validation">For W3 Validation</h2>
			<!-- this is dummy heading for W3-Validation approval you can remove it if you want -->
			
			        <div class="contact"  data-wow-delay="0.0s" id="contact">
					       	<div class="container">
							       	<div class="col-md-7 contact-left wow fadeInLeft">
   			                            <a href="#" class="button-one contact_btn button-type-one button-box">Contact Us</a>
   			                            <h4>We are located at Maseno University.</h4>
										<div class="contact-info">
												<ul class="contact-list-one">
												   <li><h5>Info:</h5></li>
												   <li>Phone : <span class="bold">+254719425856</span></li>
												   <li>Email : <a href="mailto:">eugenematini49@gmail.com </a></li>
												   <li>Address : <span class="bold">Market, Maseno</span></li>
												</ul>
												<ul class="contact-list-two">
												   <li><h5>Work Hours:</h5></li>
												   <li>Monday-Saturday : <span class="bold">09am - 8pm</span></li>										
												   <li>Sunday : <span class="bold">closed</span></li>
												</ul>
												<div class="clearfix"> </div>
										</div>
										<ul class="contact-social">	
											<li><a href="https://www.tiktok.com/@TATU_BOSS.KE"><button style="font-size: 14px;"><img src="images\tiktok.png"></button></a></li>
											<li><a href="http://www.instagram.com/RETRO_INKTATTOO"><button style="font-size: 14px;"><img src="images\instagram.png"></button></a></li>
											<li><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=eugenematini49@gmail.com&tf=1"><button style="font-size: 14px;"><img src="images\gmail.png"></button></a></li>											
											
											
										</ul>
									</div>
									
									</div>
   	                        </div>
					</div>
			</section>
			
			
			
			<section id="footer-section"> <!-- Footer Section -->
			    
			<p class="copyright wow fadeInUp">&copy; 2024 Rettro Ink. All Right Reserved. Developed by calvinmangi627@gmail.com</a>.</p>
					
				
			</section>
			
			<script>
  $(document).ready(function() { 
       $("#home").addClass("active"); 
    });
</script>
			<script type="text/javascript" charset="utf-8">
			  $(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();
			  });
			</script>
			

			
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
			</script>
			
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</body>
</html>		