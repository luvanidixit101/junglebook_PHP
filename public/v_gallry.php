<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video gallery</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

    <!-- <link rel="stylesheet" href="css/V_gallary.css"> -->

    <style>
        body
{
    font-family: serif;
    /* margin: 0; */
    /* padding: 0; */
}
header
{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #333;
    z-index: 5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.2rem 3%;
    height: 65px;
}
header .logo
{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-decoration: none;
}
header .logo span
{
    color: #38b6ff;
}
header .navbar a
{
    color: #fff;
    font-size: 1.1rem;
    margin: 0.8rem;
    text-decoration: none;
}
header .navbar a:hover
{
    color: #38b6ff;
}
.head
{
    height: 350px;
    max-width: 1400px;
    width: 100%;
    margin-top: 100px;
    margin-bottom: 8%;
    padding: 0 0 0 0;
    display: flex;
    flex-wrap: wrap;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    background-size:contain;
}
.head .map
{
  margin: auto;
  margin-top: 250px;
}
.head .map video
{
    box-shadow: #070404ab 0px 5px 15px 0px;
    width: 500px;
    height: 100%;
}

/* 380 rotate video ------------------------------------------------------------ */
.wrap-rel {
	position: absolute;
 z-index: 9;
	width: 100%;
	display: block;
}
.video-container {
	position: absolute;
	top: -10%;
	left: 0;
	width: 100%;
	z-index: 0;
	display: block;
	margin: 0;
	padding: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}
/* #Video wrapper */
.video-section {
	position: relative;
	width: 80%;
	margin:0 auto;
	border-radius: 10px;
    margin-top: 45%;
	box-shadow: 0px 0px 0px 10px rgba(0,0,0,0.45);
}
.video-wrapper, figure.vimeo, figure.youtube {
	margin:0;
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 0;
	height: 0;
	overflow: hidden;
	border-radius: 10px;
}	
.video-wrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}	
figure.youtube a img, figure.vimeo a img {
	position: absolute;
	top: 0;
	left: 0;
	width: auto;
	height: 100%;
	max-width:none;
}	
figure.vimeo a:after, figure.youtube a:after {
	content:"";
	width:60px;
	height:60px;
	background: #fff;
	z-index:9;
	position:absolute;
	top:50%;
	left:50%;
	margin:-30px 0 0 -30px;
	border-radius:50%;
	box-shadow: 0px 0px 0px 10px rgba(0,0,0,0.15);
	cursor: url('./images/tribel07.jpg') 30 30,pointer;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear; 
}
figure.vimeo:hover a:after, figure.youtube:hover a:after {
	box-shadow: 0px 0px 0px 1000px rgba(0,0,0,0.1);
}
figure.vimeo:hover a:after, figure.youtube:hover a:after{
	opacity: 0;
}
figure.vimeo a:before, figure.youtube a:before {
	border-left: 8px solid #212121;
}
figure.vimeo a:before, figure.youtube a:before {
	content:"";
	width: 0;
	height: 0;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
	z-index:10;
	position:absolute;
	top:50%;
	left:50%;
	margin-left: -3px;
	margin-top: -5px;
	display:block;
	cursor: url('./images/tribel07.jpg') 30 30,pointer;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear; 
}
figure.vimeo:hover a:before, figure.youtube:hover a:before {
	border-color: transparent;
}	
figure.vimeo a:hover img, figure.youtube a:hover img {
	-webkit-transition: all 0.4s;
	transition: all 0.4s;
}	
figure.vimeo a img, figure.youtube a img {
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear; 
	border-radius: 10px;
	cursor: url('./images/tribel07.jpg') 30 30,pointer;
}

/* side video section ------------------------------------------- */

.side_video .left
{
    height: 300px;
    width: 23%;
    margin-top: 25%;
    z-index: 9;
    margin-left: 2%;
    padding: 0 0 0 0;
    display: flex;
    flex-wrap: wrap;
    position: absolute;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
}
.side_video .left img
{
  height: 100%;
  width: 100%;
  border-radius: 5%;
}
.side_video .right
{
    height: 300px;
    width: 23%;
    margin-top: 25%;
    z-index: 9;
   position: absolute;
    margin-left: 75%;
    padding: 0 0 0 0;
    border-radius: 5%;
    display: flex;
    flex-wrap: wrap;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    background-image: url('video/v1.gif');
    background-size: cover;
}
.side_video .right img
{
  height: 100%;
  width: 100%;
  border-radius: 5%;
}

/* title section ------------------------------------------------ */
.title1
{
    margin-top: 5%;
    text-align: center;
}
.sec-title-style1 {
    position: relative;
    display: block;
    margin-top: 9px;
    padding-bottom: 50px;
}
.sec-title-style1.max-width{
    position: relative;
    display: block;
    max-width: 770px;
    margin: -9px auto 0;
    padding-bottom: 52px;    
}
.sec-title-style1.pabottom50 {
    padding-bottom: 42px;
}
.sec-title-style1 .title {
    position: relative;
    display: block;
    color: #131313;
    font-size: 36px;
    line-height: 46px;
    font-weight: 700;
    text-transform: uppercase;
}
.sec-title-style1 .title.clr-white{
    color: #ffffff;
}
.sec-title-style1 .decor {
    position: relative;
    display: block;
    width: 70px;
    height: 5px;
    margin: 19px 0 0;
}
.sec-title-style1 .decor:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #38b6ff;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #38b6ff;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .decor span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #38b6ff;
    margin: 2px 0;
}
.sec-title-style1 .text{
    position: relative;
    display: block;
    margin: 7px 0 0;
}
.sec-title-style1 .text p{
    position: relative;
    display: inline-block;
    padding: 0 15px;
    color: #131313;
    font-size: 14px;
    line-height: 16px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}
.sec-title-style1 .text.clr-yellow p{
    color: #17B794;
}
.sec-title-style1 .text .decor-left{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-left span {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #17B794;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-left:before{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #17B794;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-left:after{
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #17B794;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-right{
    position: relative;
    top: -2px;
    display: inline-block;
    width: 70px;
    height: 5px;
    background: transparent;
}
.sec-title-style1 .text .decor-right span {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 50px;
    height: 1px;
    background: #17B794;
    content: "";
    margin: 2px 0;
}
.sec-title-style1 .text .decor-right:before{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #17B794;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .text .decor-right:after{
    position: absolute;
    top: 0;
    left: 10px;
    bottom: 0;
    width: 5px;
    height: 5px;
    background: #17B794;
    border-radius: 50%;
    content: "";
}
.sec-title-style1 .bottom-text{
    position: relative;
    display: block;
    padding-top: 16px;
}
.sec-title-style1 .bottom-text p{
    color: #848484;
    font-size: 16px;
    line-height: 26px;
    font-weight: 400;
    margin: 0;
}
.sec-title-style1 .bottom-text.clr-gray p{
    color: #cdcdcd;    
}

/* video section ------------------------------------------------------------ */

.container {
    position: relative;
    width: 2000%;
    height: 100vh;
    margin-top: 3%;
  }  
  .building {
    display: grid;
    grid-template-columns: repeat(4, 2fr);
    grid-template-rows: repeat(7, 160px);
    grid-gap: 20px;
    justify-content: center;
    align-content: center;
    width: 105%;
    max-width: 2000px;
    margin: 0 -2.4%;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px 10px 0 0;
    box-shadow: 0px 0px 16px -3px #00000080;
    position: relative;
    overflow: hidden;
  }
.container .building video
 {
    height: 100%;
    width: 100%;
 }

  .building:before, .building:after {
    content: "";
    position: absolute;
    top: 0;
    width: 120%;
    left: -10%;
    transform: translate(0, -101%);
    transition: 0.42s opacity;
    opacity: 0.5233;
    pointer-events: none;
  }
  .building:before {
    height: 87px;
    background-color: #d36924;
    animation: effect1 12.4s linear forwards infinite;
    filter: blur(25px);
  }
  .building:after {
    height: 24px;
    background-color: #163ec25c;
    animation: effect2 5.88s linear forwards infinite;
    filter: blur(5px);
  }
  .building > div {
    display: grid;
  }
  .building > div:nth-child(1) {
    border: 6px solid #3a5337;
    grid-column: 1/span 3;
    grid-row: 1/span 2;
  }
  .building > div:nth-child(5) {
    border: 6px solid #4d3753;
    grid-column: 2/span 2;
    grid-row: 3/span 2;
  }
 
  .building > div:nth-child(9) {
    border: 6px solid #3a3753;
    grid-column: 2/span 3;
    grid-row: 5/span 2;
  }
 
  .building > div.blocks {
    border-radius: 10px;
    overflow: hidden;
  }
  
  .blocks div, .single-block {
    padding: 20px;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 60%), linear-gradient(to right, rgba(255, 255, 255, 0.7) 0%, rgba(255, 255, 255, 0) 60%);
    background-size: 100% 100%, 100% 100%;
    background-position: top left, top right;
    background-blend-mode: overlay;
    position: relative;
    box-shadow: 0px 0px 20px 1px #00000038 inset, 0px 0px 2px 9px #ffffff82 inset;
  }
  
  .blocks div:before, .blocks .single-block:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-opacity='0.2'%3E%3Cpath fill='%23fff' d='M0 100V0h100v100H0zm50-17c-9.9 0-18-8.1-18-18s8.1-18 18-18 18 8.1 18 18-8.1 18-18 18zm-10-30l10 10-20 20 20 20-10 10-20-20-20 20-10-10 20-20-20-20z'/%3E%3C/g%3E%3C/svg%3E");
  }
  .blocks .div {
    transition: 0.21s;
  }
  .blocks div:hover {
    background-color: #db603a;
  }
  
  .single-block {
    box-shadow: 0px 0px 2px 9px #ffffff82 inset;
    border-radius: 10px;
    transition: 0.42s;
  }

/* text video background --------------------------------------------------- */

.bgtext
{
  margin: 0;
  padding: 0;
  margin-top: 50%;
}
.bgtext .banner
{
    position: absolute;
    width: 100%;
    height: 30vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
.bgtext .banner video
{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.bgtext .banner h2
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    font-size: 10vw;
    text-align: center;
    color: #000;
    mix-blend-mode: screen;
}

  
/* footer section ----------------------------------------------------------- */ 

 footer{
  background: #f1f1f1;
  padding: 60px 50px;
  margin-top: 65%;
}
.footer-container{
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
}
.footer-container .left-col .logo{
  width: 200px;
  margin-left: -5px;
}
.social-media{
  margin: 20px 0;
}
.social-media a{
  color: #001a21;
  margin-right: 25px;
  font-size: 22px;
  text-decoration: none;
  transition: .3s linear;
}
.social-media a:hover{
  color: #38b6ff;
}
.right-col h1{
  font-size: 26px;
}
.border{
  width: 180px;
  height: 4px;
  background: #38b6ff;
}
.newsletter-form{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.txtb{
  flex: 1;
  padding: 18px 40px;
  font-size: 16px;
  color: #293043;
  background: #ddd;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  min-width: 260px;
}
.btn{
  padding: 18px 40px;
  font-size: 16px;
  color: #f1f1f1;
  background: #38b6ff;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  margin-left: 20px;
  cursor: pointer;
  transition: opacity .3s linear;
}
.btn:hover{
  opacity: .7;
}

    </style>

</head>
<body>

        
<!-- 360 deg video  rotate ----------------------------------------------------------->

<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/th2.jpg);">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Gallery</h1>
                        <h2 class="animate-box" data-animate-effect="fadeInUp">For JUNGLE BOOK <em>by</em> <a href="index.html" target="_blank">Information</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
                                    

    
        <!-- <div class="map"> 

            <div class="video-container">	
              <div class="wrap-rel">
                <div class="container"> 
                  
                  <div class="row justify-content-center">
                    <div class="col-8">
                      <div class="video-section">
                        <figure class="vimeo"> 
                          <a href="https://player.vimeo.com/video/233536312" class="">
                            <img src="http://www.ivang-design.com/svg-load/video.jpg" alt="image"/>
                          </a>
                        </figure>
                      </div>					
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
        </div>
     -->

<!-- side video section -------------------------------------------- -->

    <section class="side_video">
      <div class="left">
        <img src="images/tribel02.jpg" alt="">
      </div>
      <div class="right">
      <img src="images/loin.jpg" alt="">
      </div>
    </section>

<!-- title section start ------------------------------------------- -->
    <div class="title1">
      <div class="sec-title-style1 text-center max-width">
          <div class="title">Video Gallery</div>
          <div class="text"><div class="decor-left"><span></span></div><p>Amazing</p><div class="decor-right"><span></span></div></div>
          <div class="bottom-text">
              <p>Fixyman is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home improvement and repair, providing virtually any home repair.</p>
          </div>
      </div>
  </div>

<!-- video section --------------------------------------------------->

        <div class="container">
          
          <div class="building">
            <div class="blocks"> <video src="images/v1.mp4" autoplay muted controls></video> </div>

            <div class="single-block"> <video src="images/v2.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="images/v3.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="images/v4.mp4"  muted controls></video> </div>

            <div class="blocks"> <video src="images/v5.mp4"  muted controls></video> </div>

            <div class="single-block"> <video src="images/v6.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="images/v7.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="images/v8.mp4"  muted controls></video> </div>

            <div class="blocks"> <video src="images/v9.mp4" autoplay muted controls></video> </div>

           
            <div class="single-block"> <video src="images/v11.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="images/v12.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="images/v10.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="images/v13.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="images/v14.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="images/v1.mp4" muted controls></video> </div>

          </div>
        </div>


<!-- text video background ------------------------- -->

      <div class="bgtext">
        <div class="banner">
            <video autoplay muted loop>
                <source src="video/v5.mp4" type="video/mp4">
            </video>
            <h2> <b>junglebook</b> </h2>
        </div>
      </div>

<!-- footer section ------------------------------------ -->
       <!-- <footer>
          <div class="footer-container">
            <div class="left-col">
              <img src="images/logo.png" alt="" class="logo">
              <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <p class="rights-text">© 2022 Created By <b>Awara.com travel</b>  All Rights Reserved.</p>
            </div>
    
            <div class="right-col">
              <h1>Our Newsletter</h1>
              <div class="border"></div>
              <p>Enter Your Email to get our news and updates.</p>
              <form action="" class="newsletter-form">
                <input type="text" class="txtb" placeholder="Enter Your Email">
                <input type="submit" class="btn" value="submit">
              </form>
            </div>
          </div>
       </footer> -->

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
							<li><a href="v_gallry.php">junglebook Gallary</a></li>
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>
							<li><a href="termservic.php">Terms of services</a></li>
							<li><a href="privcypolicy.php">Privacy Policy</a></li>
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


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	  <!-- <script src='https://code.jquery.com/jquery-2.2.2.min.js'></script> -->
      <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>
      <script>
        /*! FitVids */
            !function(t){"use strict";t.fn.fitVids=function(e){var i={customSelector:null};if(!document.getElementById("fit-vids-style")){var r=document.createElement("div"),a=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0],o="&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>";r.className="fit-vids-style",r.id="fit-vids-style",r.style.display="none",
                    r.innerHTML=o,a.parentNode.insertBefore(r,a)}return e&&t.extend(i,e),this.each(function(){var e=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];i.customSelector&&e.push(i.customSelector);var r=t(this).find(e.join(","));r=r.not("object object"),r.each(function(){var e=t(this);if(!("embed"===this.tagName.toLowerCase()&&e.parent("object").length||e.parent(".fluid-width-video-wrapper").length))
                    {var i="object"===this.tagName.toLowerCase()||e.attr("height")&&!isNaN(parseInt(e.attr("height"),10))?parseInt(e.attr("height"),10):e.height(),r=isNaN(parseInt(e.attr("width"),10))?e.width():parseInt(e.attr("width"),10),a=i/r;if(!e.attr("id")){var o="fitvid"+Math.floor(999999*Math.random());
                    e.attr("id",o)}e.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*a+"%"),e.removeAttr("height").removeAttr("width")}})})}}(window.jQuery||window.Zepto);

            (function($) { "use strict";	
                $(document).ready(function() {				
                    /* Video */		
                    $(".container").fitVids();						
                    $('.vimeo a,.youtube a').on('click', function (e) {
                        e.preventDefault();
                        var videoLink = $(this).attr('href');
                        var classeV = $(this).parent();
                        var PlaceV = $(this).parent();
                        if ($(this).parent().hasClass('youtube')) {
                            $(this).parent().wrapAll('<div class="video-wrapper">');
                            $(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="547"></iframe>');
                        } else {
                            $(this).parent().wrapAll('<div class="video-wrapper">');
                            $(PlaceV).html('<iframe src="' + videoLink + '?autoplay=1&loop=1&autopause=0&muted=1&color=8c6acc" width="500" height="281" frameborder="0" allow="autoplay"></iframe>');
                        }
                    });						
                });	
            })(jQuery);


      </script>
      
</body>
</html>


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
										<li><a href="#">sociale work</a></li>
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
						<li><a href="#" class="active">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		
		</div>
	</nav>

										
									


	
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

