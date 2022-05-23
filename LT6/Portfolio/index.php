<?php $page = (isset($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Anica Tricia Martir">
<meta name="author" content="Anica Tricia Martir">
<link rel="image_src" type="image/jpg" href="img/me.jpg">
<link rel="icon" href="img/logo-1.png" sizes="192x192"/>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Anica Tricia Martir | Portfolio</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- /Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/base.css?ver=1" />
<link type="text/css" rel="stylesheet" href="css/swiper.css?ver=1" />
<link type="text/css" rel="stylesheet" href="css/style.css?ver=1" />
<!--[if lt IE 9]> <script src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /Styles -->

</head>

<body>


<!-- Wrapper -->
<div class="persono_fn_wrapper">

	<!-- MOBILE MENU -->
	<div class="persono_fn_mobilemenu">


		<!-- LOGO & HAMBURGER -->
		<div class="logo_hamb">
			<div class="in">
				<div class="menu_logo">
					<a href="./index.php"><img src="img/logo-1.png" alt="" /></a>
				</div>
				<div class="hamburger hamburger--collapse-r">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /LOGO & HAMBURGER -->

		<!-- MOBILE DROPDOWN MENU -->
		<div class="mobilemenu">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
		<!-- /MOBILE DROPDOWN MENU -->

	</div>
	<!-- /MOBILE MENU -->
	
	
	<!-- Popup -->
	<div class="persono_popup">
		
		<!-- was used for animation background -->
		<div class="extra_img"></div>
		
		<!-- was used to disable any other area (avoid other clicks on items) on animation start -->
		<div class="stopper"></div>
		
		<!-- Popup: Closer -->
		<div class="fn__closer"></div>
		<!-- /Popup: Closer -->
		
		<!-- Popup: Content -->
		<div class="container">
			<div class="content">
			
				<div class="popup_in">
					<!-- Content comes from JS -->
				</div>
				
				<div class="popup_nav">
					<div class="prev_post post_nav">
						<input type="hidden" />
						<span>Prev</span>
						<a href="#"></a>
					</div>
					<div class="go_home" title="Home">
						<a href="./index.php"></a>
						<ul>
							<li></li><li></li><li></li><li></li>
							<li></li><li></li><li></li><li></li>
							<li></li><li></li><li></li><li></li>
							<li></li><li></li><li></li><li></li>
						</ul>
					</div>
					<div class="next_post post_nav">
						<input type="hidden" />
						<span>Next</span>
						<a href="#"></a>
					</div>
				</div>
				
			</div>
		</div>
		<!-- Popup: Content -->
		
	</div>
	<!-- /Popup -->

	<!-- Sidebar -->
	<div class="persono_fn_sidebar" data-max="500" data-min="250"> <!-- you can set up minimum and maximum width for sidebar-->
		
		<!-- Sidebar: Close Button -->
		<span class="nav__button">
			<span class="nav_trigger" data-open="Open" data-close="Close">Close</span>
			<span class="width_indicator"></span>
		</span>
		<!-- /Sidebar: Close Button -->
		
		<!-- Sidebar: decoration -->
		<div class="shifter_wrapper">
			<div class="shifter">
				<ul>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
					<li><span></span></li>
				</ul>
			</div>
		</div>
		<!-- /Sidebar: decoration -->
		
		<!-- Sidebar: content -->
		<div class="sidebar_in">
			<div class="logo">
				<a href="./index.php">
					<img src="img/logo-1.png" alt="" />
					<span></span>
				</a>
			</div>
			<div class="navigation">
				<ul>
					<li><a href="./index.php">Home</a></li>
					<li><a href="#about?page=about">About</a></li>
					<li><a href="#portfolio?page=portfolio">Portfolio</a></li>
					<li><a href="#contact?page=contact">Contact</a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2022 Portfolio<br />Created by <a href="https://www.facebook.com/anica.tricia" target="_blank">Anica Tricia Martir</a></p>
			</div>
		</div>
		<!-- Sidebar: content -->
	</div>
	<!-- Sidebar -->
	
	<!-- Page Content -->
	<div class="persono_fn_content">
		<div class="persono_fn_page">
			
				<!--Section Home-->
			<section id="home">
				<div class="container">

					<div class="section_home">
						<!-- Home: left part -->
						<div class="home_left">
							<div class="title_holder">
								<h2>
									<span class="animated_text">
										<span class="text">Welcome to my website!</span>
										<span class="line"></span>
									</span>
								</h2>
							</div>
							<div class="home_left_stick">
								<span></span>
							</div>
							<div class="subtitle">
								<p>Hi! I am Anica Tricia Martir. A Bachelor of Science in Information Technology student. Welcome to my website!</p>
							</div>
						</div>
						<!-- /Home: left part -->


						<!-- Home: Right Part -->
						<div class="home_right">
							<img src="img/me.jpg" alt="" />
						</div>
						<!-- /Home: Right Part -->
					</div>

				</div>
			</section>
			<!--/Section Home-->

			<!--Section About-->
			<section id="about">
				<div class="container">

					<div class="section_about">
						<!-- Title Holder -->
						<div class="persono_fn_title">
							<div class="title_fixer">
								<h2>
									<span class="animated_text">
										<span class="text">My name is Anica Tricia Martir, and I am a gamer and musician. </span>
										<span class="line"></span>
									</span>
								</h2>
							</div>
						</div>
						<!-- Title Holder -->

						<!-- About: Content -->
						<div class="about_content">

							<!-- About: Left Part -->
							<div class="about_left" id="scene">
								<div class="left_in layer" data-depth="0.1">
									<ul class="about_us">
										<li>
											<h5>
												<span class="about_title">Birthday:</span>
												<span>February 21, 2003</span>
											</h5>
										</li>
										<li>
											<h5>
												<span class="about_title">Age:</span>
												<span>19</span>
											</h5>
										</li>
										<li>
											<h5>
												<span class="about_title">Address:</span>
												<span>Bishop Antonio Y Fortich Ave.</span>
											</h5>
										</li>
										<li>
											<h5>
												<span class="about_title">Email:</span>
												<span><a href="mailto:heythereanica@gmail.com">heythereanica@gmail.com</a></span>
											</h5>
										</li>
										<li>
											<h5>
												<span class="about_title">Phone:</span>
												<span><a href="tel:+770221770505">0928 317 8873</a></span>
											</h5>
										</li>
										<li>
											<h5>
												<span class="about_title">Study:</span>
												<span>University of St. La Salle</span>
											</h5>
										</li>
									</ul>
								</div>
								<div class="about_mover layer" data-depth="0.2"></div>
							</div>
							<!-- /About: Left Part -->


							<!-- About: Right Part -->
							<div class="about_right">
								<div class="about_me">
									<p>My name is Anica Tricia Martir, a student from University of St. La Salle. I am 19 years old, and I have a passion for music and gaming.</p>
									<p>I enjoy playing the instruments and playing video games.</p>
								</div>
								<div class="learn_more">
									<ul>
										<li>
										</li>
										<li>
											<a href="https://www.facebook.com/anica.tricia" target="_blank">
												<span><img class="persono_fn_svg" src="svg/facebook.svg" alt="" /></span>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/anicatm/" target="_blank">
												<span><img class="persono_fn_svg" src="svg/instagram.svg" alt="" /></span>
											</a>
										</li>
										<li>
											<a href="https://open.spotify.com/user/31oms2ixrv4whudt2nqhuenmethm?si=3b808bbc224f4061" target="_blank">
												<span><img class="persono_fn_svg" src="svg/spotify.png" alt="" /></span>
											</a>
										</li>
										<li>
											<a href="https://www.tiktok.com/@k0rnbip?is_from_webapp=1&sender_device=pc" target="_blank">
												<span><img class="persono_fn_svg" src="svg/tiktok.png" alt="" /></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- About: Right Part -->

						</div>
						<!-- /About: Content -->

					</div>

				</div>
			</section>
			<!--/Section About-->

			<!--Section Services-->
			<section id="services">
				<div class="container">

					<div class="section_services">
						<!-- Title Holder -->
						<div class="persono_fn_title">
							<div class="title_fixer">
								<h2>
									<span class="animated_text">
										<span class="text">Quality Services</span>
										<span class="line"></span>
									</span>
								</h2>
							</div>
						</div>
						<!-- /Title Holder -->


						<!-- All Services -->
						<div class="persono_services">

							<!-- Left Part -->
							<div class="service_list">
								<ul class="list grid">

									<!-- Service #1 -->
									<li class="grid-item">
										<input class="new_index" type="hidden" value="1" />
										<input class="old_index" type="hidden" value="1" />
										<div class="item">
											<div class="title_holder">
												<h4>
													<span class="counter">01</span>
													<span class="fn__title">Strategy &amp; Direction</span>
												</h4>
											</div>
											<span class="wing"></span>
										</div>
									</li>
									<!-- /Service #1 -->

									<!-- Service #2 -->
									<li class="grid-item">
										<input class="new_index" type="hidden" value="2" />
										<input class="old_index" type="hidden" value="2" />
										<div class="item">
											<div class="title_holder">
												<h4>
													<span class="counter">02</span>
													<span class="fn__title">Responsiveness</span>
												</h4>
											</div>
											<span class="wing"></span>
										</div>
									</li>
									<!-- /Service #2 -->

									<!-- Service #3 -->
									<li class="grid-item">
										<input class="new_index" type="hidden" value="3" />
										<input class="old_index" type="hidden" value="3" />
										<div class="item">
											<div class="title_holder">
												<h4>
													<span class="counter">03</span>
													<span class="fn__title">Reliability</span>
												</h4>
											</div>									
											<span class="wing"></span>										
										</div> 
									</li>
									<!-- /Service #3 -->

									<!-- Service #4 -->
									<li class="grid-item">
										<input class="new_index" type="hidden" value="4" />
										<input class="old_index" type="hidden" value="4" />
										<div class="item">
											<div class="title_holder">
												<h4>
													<span class="counter">04</span>
													<span class="fn__title">Security</span>
												</h4>
											</div>											
											<span class="wing"></span>											
										</div>
									</li>
									<!-- /Service #4 -->

								</ul>
							</div>
							<!-- /Left Part -->
						</div>
						<!-- /All Services -->
					</div>

				</div>
			</section>
			<!--/Section Services-->

			<!--Section Portfolio-->
			<section id="portfolio">
				<div class="container">

					<div class="section_portfolio">
						<!-- Title Holder -->
						<div class="persono_fn_title">
							<div class="title_fixer">
								<h2>
									<span class="animated_text">
										<span class="text">Take a look at my previous works!</span>
										<span class="line"></span>
									</span>
								</h2>
							</div>
						</div>
						<!-- /Title Holder -->


						<div class="portfolio_footer">
							<div class="portfolio_list">
								<ul class="list">
									<li class="list_item filter__brands filter__typography">
										<div class="item">
											<input class="index" type="hidden" value="1" />
											<div class="gallery_img" data-image="img/1st.png"></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">LEARNING TASK 2</span>
											</div>

											<div class="hidden_info">
												<div class="top_part">
													<img src="img/1st.png" alt="" />
												</div>
												<div class="title_holder">
													<a href="https://anicatriciamartir.herokuapp.com/LT2/Homepage.html" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>
									<li class="list_item filter__typography filter__illustrator">
										<div class="item">
											<input class="index" type="hidden" value="2" />
											<div class="gallery_img" data-image="img/2nd.png"></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">LEARNING TASK 3</span>
											</div>
											<div class="hidden_info">
												<div class="top_part">
													<img src="img/2nd.png" alt="" />
												</div>
												<div class="title_holder">
													<a href="https://anicatriciamartir.herokuapp.com/LT3/index.html" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>
												</div>
											</div>
									<li class="list_item filter__visual filter__brands">
										<div class="item">
											<input class="index" type="hidden" value="3" />
											<div class="gallery_img" data-image="img/3rd.png"></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">CLE1 MIDTERM</span>
											</div>
											<div class="hidden_info">
												<div class="top_part">
													<img src="img/3rd.png" alt="" />
												</div>		
												<div class="title_holder">
													<a href="https://anicatriciamartir.herokuapp.com/CLE1MT/index.html" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>										
												</div>
											</div>
									<li class="list_item filter__typography filter__illustrator">
										<div class="item">
											<input class="index" type="hidden" value="4" />
											<div class="gallery_img" data-image="img/4th.png"><a href="index.html"></a></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">LEARNING TASK 4</span>
											</div>
											<div class="hidden_info">
												<div class="top_part">
													<img src="img/4th.png" alt="" />
												</div>
												<div class="title_holder">
													<a href="https://anicatriciamartir.herokuapp.com/LT4/index.html" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>
												</div>
											</div>
									<li class="list_item filter__visual filter__typography">
										<div class="item">
											<input class="index" type="hidden" value="5" />
											<div class="gallery_img" data-image="img/5th.png"></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">LEARNING TASK 5</span>
											</div>
											<div class="hidden_info">
												<div class="top_part">
													<img src="img/5th.png" alt="" />													
												</div>	
												<div class="title_holder">
													<a href="file:///C:/LT5/index.html" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>											
												</div>
											</div>
									<li class="list_item filter__brands filter__visual">
										<div class="item">
											<input class="index" type="hidden" value="6" />
											<div class="gallery_img" data-image="img/6th.jpg"></div>
											<img src="img/thumb/1-1.jpg" alt="" />
											<div class="gallery_text">
												<span class="gallery_title">Project, Websites</span>
												<span class="fn__title">Anica Tricia Portfolio</span>
											</div>
											<div class="hidden_info">
												<div class="top_part">
													<img src="img/6th.jpg" alt="" />
												</div>
												<div class="title_holder">
													<a href="#" class="link" target="_blank">Click here to navigate</a>
													<h4 class="subtitle">Project, Websites</h4>
												</div>
											</div>
										</div>
									</li>
									</li>
									</li>
									</li>
									</li>
											</div>
										</div>
									</li>
								</ul>
						</div>
					</div>					
				</div>
			<!--/Section Portfolio-->

			<!--Section Blog-->
			<section id="blog">
				<div class="container">


					<div class="section_blog">
						<!-- Title Holder -->
						<!-- Title Holder -->
								
										
			<!--/Section Blog-->

			<!--/Section Contact-->
			<section id="contact">
				<div class="container">

					<div class="section_contact">
						<div class="persono_fn_title">
							<div class="title_fixer">
								<h2>
									<span class="animated_text">
										<span class="text">Get In Touch</span>
										<span class="line"></span>
									</span>
								</h2>
							</div>
						</div>
						<div class="contact_footer">
							<div class="contact_footer_form">
								<form class="contact_form" action="/" method="post" autocomplete="off" data-email="youremail@gmail.com">
									<div class="success" data-success="Your message has been received, we will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<ul>
										<li class="half"><input class="name" type="text" placeholder="Name *" /></li>
										<li class="half"><input class="email" type="email" placeholder="Email *" /></li>
										<li><input class="tel" type="tel" placeholder="Phone" /></li>
										<li><textarea class="message" placeholder="Message"></textarea></li>
										<li><input class="submit" type="submit" value="Send Message"/></li>
									</ul>
								</form>
							</div>
							<div class="contact_footer_address">
								<div class="address_header">
									<p>Address</p>
									<h4>Bishop Antonio Y Fortich Ave.</h4>
								</div>
								<div class="address_middle">
									<p>Phone</p>
									<h4><a href="tel:09283178873">0928 317 8873</a></h4>
								</div>
								<div class="address_footer">
									<a href="mailto:persono.designo@gmail.com">University of St. La Salle</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--/Section Contact -->

		</div>
	</div>
	<!-- /Page Content -->
			</section>
</div>
<!-- /Wrapper -->



<!-- Scripts -->
<script src="js/jquery.js?ver=1"></script>
<script src="js/plugins.js?ver=1"></script>
<script src="js/init.js?ver=1"></script>
<!-- /Scripts -->

</body>
</html>