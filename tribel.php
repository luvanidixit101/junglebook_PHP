<?php
require_once __DIR__ . '/conn.php';
?>

<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<title>JUNGLE BOOK</title>
     
	<link rel="Website icon" type="jpg" href="images/mix01.jpg">

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="admin/assets/css/styles.css">
    

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 text-right gtco-contact">
					<ul class="">
						<li><a href="#"><i class="ti-mobile"></i> +91 9925684868 </a></li>
						<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
						<li><a href="#"><i class="icon-mail2"></i></a></li>
						<li><a href="#"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><!--a href="index.html">HarDix <em>.</em></a--><img src="images/mix_01.png" alt="" height="100px" width="200px"></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index01.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
							<li><a href="education.php">Education</a></li>
										<li><a href="sec2.php">sociale work</a></li>
										<li><a href="tribel.php">tribal</a></li>
							
							</ul>
						</li>
						<!-- <li class="has-dropdown">
							<a href="#">Dropdown</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li> -->
						<li><a href="v_gallry.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/tribel02.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Tribel</h1>
							<h2 class="animate-box" data-animate-effect="fadeInUp">For JUNGLE BOOK <em>by</em> <a href="index.html" target="_blank">Information</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
										
									


	<div class="gtco-section">				
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					
					
					<?php $query=mysqli_query($conn,"select * from tribel where id=1");
$cnt=1;

					$row=mysqli_fetch_array($query)

 ?>	
					<ul id="gtco-portfolio-list">
				   <!-- <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tribel01.jpg); ">  -->
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); "> 
							<a href="card1.php" class="color-1">
								<div class="case-studies-summary">
									<!-- <span>Web Design</span> -->
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>


						<?php $query=mysqli_query($conn,"select * from tribel where id=2");
$cnt=1;

					$row=mysqli_fetch_array($query)

 ?>	


						 <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card2.php" class="color-2">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li> 
						
						<?php $query=mysqli_query($conn,"select * from tribel where id=3");

					$row=mysqli_fetch_array($query)

 ?>	
						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card3.php" class="color-3">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>

						<?php $query=mysqli_query($conn,"select * from tribel where id=4");
$row=mysqli_fetch_array($query)
?>	


						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card4.php" class="color-4">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=5");
$row=mysqli_fetch_array($query)
?>	

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); "> 
							<a href="card5.php" class="color-5">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=6");
$row=mysqli_fetch_array($query)
?>	

						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card6.php" class="color-6">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=7");
$row=mysqli_fetch_array($query)
?>	

						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); "> 
							<a href="card7.php" class="color-1">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=8");
$row=mysqli_fetch_array($query)
?>	

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card8.php" class="color-2">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>

						<?php $query=mysqli_query($conn,"select * from tribel where id=9");
$row=mysqli_fetch_array($query)
?>	

						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card9.php" class="color-3">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=10");
$row=mysqli_fetch_array($query)
?>	

						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card10.php" class="color-4">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>
						<?php $query=mysqli_query($conn,"select * from tribel where id=11");
$row=mysqli_fetch_array($query)
?>	

						<!-- <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); "> 
							<a href="card11.php" class="color-5">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li> -->
						<?php $query=mysqli_query($conn,"select * from tribel where id=12");
$row=mysqli_fetch_array($query)
?>	

						<!-- <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(admin/images/<?php echo htmlentities($row['image']);?>); ">
							<a href="card12.php" class="color-6">
								<div class="case-studies-summary">
									<span><?php echo htmlentities($row['sub_titale']);?></span>
									<h2><?php echo htmlentities($row['main_titale']);?></h2>
								</div>
							</a>
						</li>  -->
						
						</ul>		
				</div>
				<?php  ?>
			</div>

			
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center animate-box">
					<a href="#" class="btn btn-primary btn-lg btn-block">Have a project? Let's get started</a>
				</div>
			</div>

		</div>
	</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>"Jungle Book" is a non-governmental organization (NGO) based in India, working towards the conservation of wildlife and habitats.  </p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">junglebook Gallary</a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +91 9925684868</a></li>
							<li><a href="#"><i class="icon-mail2"></i> HardDix@gmail.com</a></li>
							<!-- <li><a href="#"><i class="icon-chat"></i></a></li> -->
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2024 HardDix</small>
						<small class="block">Designed by <a href="#home" target="_blank">HardDix</a> Demo Images: <a
								href="#" target="_blank">JUNGLE BOOK</a></small>
					</p>
					<p class="pull-right">
					<ul class="gtco-social-icons pull-right">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>




   </body>
</html>
