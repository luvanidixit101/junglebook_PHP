<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .otp-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="otp-container">
        <h2>Enter OTP</h2>
        <form  method="POST">
            <label for="otp">Enter OTP:</label>
            <input type="text" id="otp" name="otp" required>
            <button type="submit" name="submitbtn">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submitbtn']))
            {

                $otp1=$_POST['otp'];
            

             $sql="SELECT * FROM registretion WHERE otp='$otp1'"; 
           $retvar=mysqli_query($conn,$sql);
        if(mysqli_num_rows($retvar)>0)
        {
        
               echo"<script type=\"text/javascript\">alert(\"otp verifay\")</script>";
             
                header ("Location:index01.php");


                  
        }
        else
        {  echo"<script type=\"text/javascript\">alert(\"could not login conform:\")</script>";
           echo" <h1>increcte user_name and password</h1>";
        }
            mysqli_close($conn);
            }
      



// if(isset($_GET['otp01'])){

//     $otp_received = $_GET['otp01'];
//     echo $otp_received;
//     // Now, $otp_received contains the OTP value that was passed from the previous page
//     // You can use it as needed in your form02.php page
// } else {
//     // Handle the case where the OTP value is not present in the URL
//     // Redirect or display an error message, as appropriate
// }
// if(isset($_POST['submitbtn']))
// {
    
// }




?>
