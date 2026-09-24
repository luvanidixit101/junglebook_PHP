<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    


    

<style>
header
{
    font-family: serif;

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
    color: #17B794;
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
    color: #17B794;
}

.head
{
    height: 350px;
    max-width: 1400px;
    width: 100%;
    margin-top: 100px;
    margin-bottom: 0;
    padding: 0 0 0 0;
    display: flex;
    flex-wrap: wrap;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    background-image: url('./images/tribel07.jpg');
    background-size:contain;
}

.hexagon-gallery {
    margin-top: 0%;
    margin-left: 11.5%;
    max-width: 1000px;
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-auto-rows: 200px;
    grid-gap: 14px;
    position: absolute;
    z-index: 9;
  }
  
  .hexagon-gallery .hex {
    display: flex;
    position: relative;
    width: 240px;
    height: 265px;
    background-color: #9c9c9c;
    -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  }
.hexagon-gallery .hex img
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  size: 50px;
} 
.hexagon-gallery .hex .content
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: linear-gradient(45deg,#17B794,rgba(3,169,244,0.5));
  color: #fff;
  opacity: 0;
  transition: 0.5s;
}
.hexagon-gallery .hex:hover .content
{
  opacity: 1;
  cursor: pointer;
}
  .hex:first-child {
    grid-row-start: 1;
    grid-column: 2 / span 2;
  }
 
  .hex:nth-child(2) {
    grid-row-start: 1;
    grid-column: 4 / span 2;
  }
  
  .hex:nth-child(3) {
    grid-row-start: 1;
    grid-column: 6 / span 2;
  }
  
  .hex:nth-child(4) {
    grid-row-start: 2;
    grid-column: 1 / span 2;
  }
  
  .hex:nth-child(5) {
    grid-row-start: 2;
    grid-column: 3 / span 2;
  }
  
  .hex:nth-child(6) {
    grid-row-start: 2;
    grid-column: 5 / span 2;
  }
  
  .hex:nth-child(7) {
    grid-row-start: 2;
    grid-column: 7 / span 2;
  }
  

/* title section --------------------------------------------------- */
.title1
{
    margin-top: 15%;
    text-align: center;
}
.sec-title-style1 {
    position: relative;
    display: block;
    margin-top: -9px;
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
    background: #17B794;
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
    background: #17B794;
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
    background: #17B794;
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

/* booking section ---------------------------------------------------------------------- */

.cards {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2.5rem;
    width: 100%;
    max-width: 1600px;
    margin-top: 10vh;
  }
  
  .card {
    border-radius: 16px;
    box-shadow: 0 30px 30px -25px rgba(65, 51, 183, 0.25);
    max-width: 300px;
  }
  
  .information {
    background-color: #fcf9f9;
    padding: 1.5rem;
  }
  .information .tag {
    display: inline-block;
    background-color:#f1eeff;
    color:  #17B794;
    font-weight: 600;
    font-size: 0.875rem;
    padding: 0.5em 0.75em;
    line-height: 1;
    border-radius: 6px;
  }
  .information .tag + * {
    margin-top: 1rem;
  }
  .information .title {
    font-size: 1.5rem;
    color: #141b22;
    line-height: 1.25;
  }
  .information .title + * {
    margin-top: 1rem;
  }
  .information .info {
    color:#a0a0a0;
  }
  .information .info + * {
    margin-top: 1.25rem;
  }
  .information .button {
    font: inherit;
    line-height: 1;
    background-color: #fcf9f9;
    border: 2px solid  #17B794;
    color:  #17B794;
    padding: 0.5em 1em;
    border-radius: 6px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
  }
  .information .button:hover, .information .button:focus {
    background-color:  #17B794;
    color: #fcf9f9;
  }
  .information .details {
    display: flex;
    gap: 1rem;
  }
  .information .details div {
    padding: 0.75em 1em;
    background-color: #f1eeff;
    border-radius: 8px;
    display: flex;
    flex-direction: column-reverse;
    gap: 0.125em;
    flex-basis: 50%;
  }
  .information .details dt {
    font-size: 0.875rem;
    color:#a69fd6;
  }
  .information .details dd {
    color: #17B794;
    font-weight: 600;
    font-size: 1.25rem;
  }
  
  .plan {
    padding: 10px;
    background-color:#fcf9f9;
    color: #917072;
  }
  .plan strong {
    font-weight: 600;
    color:#754D42;
  }
  .plan .inner {
    padding: 20px;
    padding-top: 40px;
    background-color: #FFEDEC;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
  }
  .plan .pricing {
    position: absolute;
    top: 0;
    right: 0;
    background-color: #FBC8BE;
    border-radius: 99em 0 0 99em;
    display: flex;
    align-items: center;
    padding: 0.625em 0.75em;
    font-size: 1.25rem;
    font-weight: 600;
    color: #754D42;
  }
  .plan .pricing small {
    color: #917072;
    font-size: 0.75em;
    margin-left: 0.25em;
  }
  .plan .title {
    font-weight: 600;
    font-size: 1.25rem;
    color: #754D42;
  }
  .plan .title + * {
    margin-top: 0.75rem;
  }
  .plan .info + * {
    margin-top: 1rem;
  }
  .plan .features {
    display: flex;
    flex-direction: column;
  }
  .plan .features li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .plan .features li + * {
    margin-top: 0.75rem;
  }
  .plan .features .icon {
    background-color: var(--c-java);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fcf9f9;
    border-radius: 50%;
    width: 20px;
    height: 20px;
  }
  .plan .features .icon svg {
    width: 14px;
    height: 14px;
  }
  .plan .features + * {
    margin-top: 1.25rem;
  }
  .plan button {
    font: inherit;
    background-color:  #17B794;
    border-radius: 6px;
    color:#fcf9f9;
    font-weight: 500;
    font-size: 1.125rem;
    width: 100%;
    border: 0;
    padding: 1em;
  }
  .plan button:hover, .plan button:focus {
    background-color:#17B794;
  } 
  button a
  {
    text-decoration: none;
    color: white;
  }

  footer
  {
  background: #f1f1f1;
  padding: 60px 50px;
  margin-top: 10%;
  }
  .footer-container
  {
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
  }
  .footer-container .left-col .logo
  {
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
  color: #17B794;
  }
  .right-col h1{
  font-size: 26px;
  }
  .border{
  width: 180px;
  height: 4px;
  background: #17B794;
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
  background: #17B794;
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

  .try{
    top: -102px;
  }

</style>

</head>
<body>
 

    <header id="gtco-header" class="gtco-cover gtco-cover-xs try" role="banner" style="background-image:url(images/tribel07.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						
					</div>
				</div>
			</div>
		</div>
	</header>
	

        <!-- <div class="head"></div> -->

        <section class="hexagon-gallery">
            <div class="hex">
                <img src="images/3.jpg" >
                <div class="content">
                    <div>
                        <h2>Hostel living</h2>
                        
                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/6.jpg" >
                <div class="content">
                    <div>
                        <h2>animal feeding</h2>
                        
                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/edu5.jpg" >
                <div class="content">
                    <div>
                        <h2>education for children</h2>

                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/loin.jpg" >
                <div class="content">
                    <div>
                        <h2>animal tretment</h2>
                      
                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/tribel07.jpg" >
                <div class="content">
                    <div>
                        <h2>tribe empowering</h2>
                                    
                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/clean.jpg" >
                <div class="content">
                    <div>
                        <h2>cleaning forest</h2>
                      
                    </div>
                </div>
            </div>
            <div class="hex">
                <img src="images/tribel04.jpg" >
                <div class="content">
                    <div>
                        <h2>tribe train</h2>
                       
                    </div>
                </div>
            </div>
        </section>       


<!-- title section start ------------------------------------------- -->
        <div class="title1">
            <div class="sec-title-style1 text-center max-width">
                <div class="title">enviroment</div>
                <div class="text"><div class="decor-left"><span></span></div><p>Amazing</p><div class="decor-right"><span></span></div></div>
                <div class="bottom-text">
                    <p>Fixyman is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home improvement and repair, providing virtually any home repair.</p>
                </div>
            </div>
        </div>


<!-- booking section --------------------------------------------- -->
    <!-- <div class="cards">
        <article class="information [ card ]">
            <span class="tag">Hotel Booking</span>
            <h2 class="title">Sorry !!! This Feature is Under Development</h2>
            <p class="info">Elemenatary tracks all the events for the day as you scheduled and you will never have to worry.</p>
            <button class="button">
                <span>Book Now</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
                </svg>
            </button>
        </article>

        <article class="plan [ card ]">
            <div class="inner">
                <span class="pricing">
                    <span>
                        Book Our <small> Package</small>
                    </span>
                </span>
                <h2 class="title">Best Plane For Tour</h2>
                <p class="info">This plan is for those who will journey in india with Awara.com travel.</p>
                <ul class="features">
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span><strong>Family</strong> Tour Package</span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>Plan with<strong> Friends, partner</strong></span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>Make your happy memorys with us</span>
                    </li>
                </ul>
                <button class="button">
                    <a href="category.php">Choos Plane</a>
                </button>
            </div>
        </article>

        <article class="information [ card ]">
        <span class="tag">Adventure Booking</span>
            <h2 class="title">Sorry !!! This Feature is Under Development</h2>
            <p class="info">Always keep updated with this simple tool on the go, when and where ever you need.</p>
            <dl class="details">
                <div>
                    <dt>Satisfaction</dt>
                    <dd>100%</dd>
                </div>
                <div>
                    <dt>Customers</dt>
                    <dd>4.5K</dd>
                </div>
            </dl>
        </article>
    </div>

<!-- booking section 2nd row ------------------------------------------  -->
            
    <!-- <div class="cards">
    
        <article class="plan [ card ]">
            <div class="inner">
                <span class="pricing">
                    <span>
                        Guide <small> Booking</small>
                    </span>
                </span>
                <h2 class="title">Sorry !!! This Feature is Under Development</h2>
                <p class="info"></p>
                <ul class="features">
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span><strong>20</strong> team members</span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>Plan <strong>team meetings</strong></span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>File sharing</span>
                    </li>
                </ul>
                <button class="button">
                    Choose plan
                </button>
            </div>
        </article>

        <article class="information [ card ]">
            <span class="tag">Airplane Booking</span>
            <h2 class="title">Sorry !!! This Feature is Under Development</h2>
            <p class="info">Elemenatary tracks all the events for the day as you scheduled and you will never have to worry.</p>
            <button class="button">
                <span>Learn more</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
                </svg>
            </button>
        </article>

        <article class="plan [ card ]">
            <div class="inner">
                <span class="pricing">
                    <span>
                        Train ticket <small>Booking</small>
                    </span>
                </span>
                <h2 class="title">Sorry !!! This Feature is Under Development</h2> -->
                <!-- <p class="info">This plan is for those who have a team already and running a large business.</p> -->
                <!-- <ul class="features">
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span><strong>20</strong> team members</span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>Plan <strong>team meetings</strong></span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>File sharing</span>
                    </li>
                </ul>
                <button class="button">
                    Choose plan
                </button>
            </div>
        </article>

    </div> -->

<!-- Booking section 3rd row-----------------------------------------  -->

    <div class="cards">
        <article class="information [ card ]">
            <span class="tag">voluntear</span>
            <h2 class="title">volunteer About information</h2>
            <p class="info">Here information about volunteer to how type work help to us</p>
            <a href="volcrd.php"> <button class="button">
                <span>Learn more</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
                </svg>
            </button></a>
           
        </article>

        <article class="plan [ card ]">
            <div class="inner">
                <span class="pricing">
                    <span>
                           volunteer <small> form </small>
                    </span>
                </span>
                <h2 class="title">welcome to connect with us</h2>
                <!-- <p class="info">This plan is for those who have a team already and running a large business.</p> -->
                <ul class="features">
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span><strong></strong> cleaning forest </span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span> <strong></strong>spred awareness</span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>help NGO</span>
                    </li>
                </ul>
                <a href="volunteer.php"><button class="button">
                   <span>click here</span>
                </button></a>
                
            </div>
        </article>

        <article class="information [ card ]">
        <span class="tag">static information</span>
            <h2 class="title">some digites to how many volunteer</h2>
            <p class="info">here perminant & temprory voluntear togethering work with us</p>
            <dl class="details">
                <div>
                    <dt>Satisfaction</dt>
                    <dd>98%</dd>
                </div>
                <div>
                    <dt>voluntear</dt>
                    <dd>1864</dd>
                </div>
            </dl>
        </article>
    </div>
    <div class="cards">
        <article class="information [ card ]">
            <span class="tag">justice</span>
            <h2 class="title">we are work for animals,tribal and enviroment</h2>
            <p class="info">junglebook is help to victum or giving a right judgement</p>
           
           <a href="socialcrd.php"> <button class="button">
                <span>Learn more</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
                </svg>
            </button></a>
           
        </article>

        <article class="plan [ card ]">
            <div class="inner">
                <span class="pricing">
                    <span>
                        justice<small>for form</small>
                    </span>
                </span>
                <h2 class="title">welcome justice & social work</h2>
                <!-- <p class="info">This plan is for those who have a team already and running a large business.</p> -->
                <ul class="features">
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span><strong></strong>help to animal case</span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span> <strong>tribal right</strong></span>
                    </li>
                    <li>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                            </svg>
                        </span>
                        <span>enviroment about</span>
                    </li>
                </ul>
                <a href="sec2_02.php"><button class="button">
                    click here
                </button></a>
                
            </div>
        </article>

        <article class="information [ card ]">
        <span class="tag">satical information</span>
            <h2 class="title">junglebook is work for help to all forest things</h2>
            <p class="info">providing defence or help for there rights </p>
            <dl class="details">
                <div>
                    <dt>Satisfaction</dt>
                    <dd>96%</dd>
                </div>
                <div>
                    <dt>case</dt>
                    <dd>14</dd>
                </div>
            </dl>
        </article>
    </div>


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
                           <li><a href="v_gallry.php">Gallery</a></li>
                           <li><a href="contact.php">Contact</a></li>
                       </ul>
                   </div>
               </div>
           
           </div>
       </nav>
   
       <!-- <header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/tribel02.jpg);">
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
                                            -->
                                       
   
   
       
   
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
   














       <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>
     
</body>
</html>








