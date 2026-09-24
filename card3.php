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

	<!-- <header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Our Portfolio</h1>
							<h2 class="animate-box" data-animate-effect="fadeInUp">For JUNGLE BOOK <em>by</em> <a href="index.html" target="_blank">Information</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	 -->

<section class="center01">

	 <div class="wrap animate pop">
		<div class="overlay">
        <?php $query=mysqli_query($conn,"select * from tribel where id=3");
$cnt=1;

					$row=mysqli_fetch_array($query)

 ?>	
			<div class="overlay-content animate slide-left delay-2">
				<h1 class="animate slide-left pop delay-4"><?php echo htmlentities($row['main_titale']);?></h1>
				<p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;"><?php echo htmlentities($row['sub_titale']);?></p>
			</div>
			<div class="image-content animate slide delay-5"></div>
			<div class="dots animate">
				<div class="dot animate slide-up delay-6"></div>
				<div class="dot animate slide-up delay-7"></div>
				<div class="dot animate slide-up delay-8"></div>
			</div>
		</div>
		<div class="text">
			 <p><img class="inset" src="./admin/images/<?php echo htmlentities($row['image']);?>" alt="" /><?php echo htmlentities($row['description']);?><!--Trees are woody perennial plants that are a member of the kingdom <em>Plantae</em>. All species of trees are grouped by their genus, family, and order. This helps make identifying and studying trees easier.</p> -->
			<!-- <p>Apart from providing oxygen for the planet and beauty when they bloom or turn color, trees are very useful. Certain species of hardwood and softwood trees are excellent for timber, making furniture, and paper.</p>
			<p>When managed properly, trees are a good source of renewable energy and construction material.</p> -->
		</div>
	</div>

	<br></br>
	<br></br>
	<br></br>
	<br></br>
</section>
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


<style>* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	display: grid;
	place-items: center;
	margin: 0;
	padding: 0;
	/* background-color :rgb(239, 243, 243); */
	font-family: "Martel Sans", sans-serif;
}
.center01{
    background-color: #000;
}
h1 {
	font-size: 5.25vmin;
	text-align: center;
	color: white;
}
p {
	font-size: max(10pt, 2.5vmin);
	line-height: 1.4;
	color: #0e390e;
	margin-bottom: 1.5rem;
}

.wrap {
	display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	width: 150vmin;
	height: 95vmin;
	margin: 2rem auto;
	border: 8px solid;
	border-image: linear-gradient(
			-50deg,
			green,
			#00b300,
			forestgreen,
			rgb(16, 19, 16),
			lightgreen,
			#00e600,
			green
		)
		1;
	transition: 0.3s ease-in-out;
	position: relative;
	overflow: hidden;
}
.overlay {
	position: relative;
	display: flex;
	width: 100%;
	height: 100%;
	padding: 1rem 0.75rem;
	background: #0ec679c3;
	transition: 0.4s ease-in-out;
	z-index: 1;
}
.overlay-content {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	width: 0vmin;
	height: 100%;
	padding: 0.5rem 0 0 0.5rem;
	border: 3px solid;
	border-image: linear-gradient(
			to bottom,
			#e9e9e7 5%,
			rgb(220, 221, 220) 35% 65%,
			#979792 95%
		)
		0 0 0 100%;
	transition: 0.3s ease-in-out 0.2s;
	z-index: 1;
}
.image-content {
	position: absolute;
	top: 0;
	right: 0;
	width:100vmin;
	height: 100%;
	background-image: url("./admin/images/<?php echo htmlentities($row['image']);?>");
	background-size: cover;
	transition: 0.3s ease-in-out;
	/* border: 1px solid green; */
}

.inset {
	max-width: 30%;
	margin: 0.25em 1em 1em 0;
	border-radius: 0.25em;
	float: left;
}

.dots {
	position: absolute;
	bottom: 1rem;
	right: 2rem;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	width: 55px;
	height: 4vmin;
	transition: 0.3s ease-in-out 0.3s;
}
.dot {
	width: 14px;
	height: 14px;
	color: #000;

	border-radius: 50%;
	transition: 0.3s ease-in-out 0.3s;
}

.text {
	position: absolute;
	top: 0;
	right: 0;
	width: 90vmin;
	height: 100%;
	padding: 6vmin 4vmin;
	background: #fff;
	box-shadow: inset 1px 1px 15px 0 rgba(0 0 0 / 0.4);
	overflow-y: scroll;
	margin-left:20px;
}

.wrap:hover .overlay {
	transform: translateX(-60vmin);
	margin-right:350px;
	
}
.wrap:hover .image-content {
	width: 90vmin;
	
}
.wrap:hover .overlay-content {
	border: none;
	transition-delay: 0.2s;
	transform: translateX(60vmin);
}
.wrap:hover .dots {
	transform: translateX(1rem);
}
.wrap:hover .dots .dot {
	background: white;
}

/* Animations and timing delays */
.animate {
	animation-duration: 0.7s;
	animation-timing-function: cubic-bezier(0.26, 0.53, 0.74, 1.48);
	animation-fill-mode: backwards;
}
/* Pop In */
.pop {
	animation-name: pop;
	top: 120px;

}
@keyframes pop {
	0% {
		opacity: 0;
		transform: scale(0.5, 0.5);
	}
	100% {
		opacity: 1;
		transform: scale(1, 1);
	}
}

/* Slide In */
.slide {
	animation-name: slide;
}
@keyframes slide {
	0% {
		opacity: 0;
		transform: translate(4em, 0);
	}
	100% {
		opacity: 1;
		transform: translate(0, 0);
	}
}

/* Slide Left */
.slide-left {
	animation-name: slide-left;
}
@keyframes slide-left {
	0% {
		opacity: 0;
		transform: translate(-40px, 0);
	}
	100% {
		opacity: 1;
		transform: translate(0, 0);
	}
}

.slide-up {
	animation-name: slide-up;
}
@keyframes slide-up {
	0% {
		opacity: 0;
		transform: translateY(3em);
	}
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.delay-1 {
	animation-delay: 0.3s;
}
.delay-2 {
	animation-delay: 0.6s;
}
.delay-3 {
	animation-delay: 0.9s;
}
.delay-4 {
	animation-delay: 1.2s;
}
.delay-5 {
	animation-delay: 1.5s;
}
.delay-6 {
	animation-delay: 1.8s;
}
.delay-7 {
	animation-delay: 2.1s;
}
.delay-8 {
	animation-delay: 2.4s;
}
</style>