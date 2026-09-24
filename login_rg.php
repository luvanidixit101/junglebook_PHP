<?php

   include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="login_rg1.css">


    <style>
          
 body {
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.parallax {
    position: relative;
    height: 100vh;
    display: flex;
    width: 205vh;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#hill1,
#hill2,
#hill3,
#hill4,
#hill5,
#tree,
#leaf,
#plant {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
}

#hill1 {
    z-index: -1; /* Ensure the first image is at the back */
}

    </style>
</head>
<body>
<section class="parallax">

        <div class="parallax">
    <img src="./images/hill1.png" alt="Hill 1" id="hill1">
    <!-- <h2 id="text">JUNGLE BOOK </h2> -->
    <img src="./images/hill2.png" alt="Hill 2" id="hill2">
    <img src="./images/hill3.png" alt="Hill 3" id="hill3">
    <img src="./images/hill4.png" alt="Hill 4" id="hill4">
    <img src="./images/hill5.png" alt="Hill 5" id="hill5">
    <img src="./images/tree.png" alt="Tree" id="tree">
    <img src="./images/leaf.png" alt="Leaf" id="leaf">
    <img src="./images/plant.png" alt="Plant" id="plant">



        

            <!-- <video src="pexels_videos_2330708 (2160p).mp4" id="video-slider" loop autoplay muted></video> -->
<!-- <section class="a1"> -->

    
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- <form action="login_rg1.php" method="POST"> -->
            <form action="formphp.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name" required name="txt1"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" required name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" required name="txt3"/>
                    <label></label>
                </div>
                <button type="submit" value="login" name="txt4">Sign Up</button>
                
  
            </form>
        </div>

        <!-- </section> -->



<!---------------------------------------------------login-------------------------------------------->




        <div class="form-container sign-in-container">
            <form action="login_rg1.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" required name="te1"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" required name="te2"/>
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit" name="te4" value="sign in">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>



   
        </div>

</section>

    <!--footer>
        <mark>See more on <a href="#">Karacode</a></mark>
    </footer-->
    
    <!-- js code -->
    <script>
const container = document.getElementById('container');
const overlayCon = document.getElementById('overlayCon');
const overlayBtn = document.getElementById('overlayBtn');
 
overlayBtn.addEventListener('click',()=>{
    container.classList.toggle('right-panel-active');

    overlayBtn.classList.remove('btnScaled');
    window.requestAnimationFrame(()=>{
        overlayBtn.classList.add('btnScaled');
    })
});

    </script>




</body>
</html>

