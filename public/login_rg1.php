<?php
    
    include("conn.php");
    // echo '<br><h1>connect sucessfully<h1><br>';

       //------------------------------------registretion------------------------------>

        // if (isset($_POST['txt4'])) {
        
        //     $name = $_POST['txt1'];
        //     $E_mail= $_POST['email'];
        //     $password= $_POST['txt3'];
            
        //     $sql1="INSERT INTO registretion(name, E_mail, password) VALUES ('$name','$E_mail','$password')";
        
        //     if (mysqli_query($conn,$sql1)) {
        //     //     echo "<script type=\"text/javascript\">alert(\"Registration is conform\")</script>";
        //     //    header("location:index.php");
        //     } 
        //     else
        //      {
        //         echo "<script type=\"text/javascript\">alert(\"could not Registration conform:" . mysqli_error($conn) . "\")</script>";
        //         echo "please enter other id";
        //     }

        // }

//---------------------------------------------------------------------login check----------------------->

      if(isset($_POST['te4']))
            {
                $e_mail=$_POST['te1'];
                $pass=$_POST['te2'];

             $sql="SELECT * FROM registretion WHERE e_mail='$e_mail' AND password='$pass'"; 
           $retvar=mysqli_query($conn,$sql);
        if(mysqli_num_rows($retvar)>0)
        {
        
               echo"<script type=\"text/javascript\">alert(\"login conform\")</script>";
             
               header ("Location:index01.php");
                  
        }
        else
        {  echo"<script type=\"text/javascript\">alert(\"could not login conform:\")</script>";
           echo" <h1>increcte user_name and password</h1>";
        }
            mysqli_close($conn);
            }
        
            
            ?>
          