<?php

include("conn.php");

//  if(isset($_POST['sub']))
// {
//     $rg= $_POST['email1'];
// }
    include('smtp/PHPMailerAutoload.php');

$otp=rand(100000,999999);
$otp01 =$otp;







if (isset($_POST['txt4'])) {
        
	$name = $_POST['txt1'];
	$E_mail= $_POST['email'];
	$password= $_POST['txt3'];
	
	$sql1="INSERT INTO registretion(name, E_mail, password, otp) VALUES ('$name','$E_mail','$password','$otp01')";

	if (mysqli_query($conn,$sql1)) {
	    echo "<script type=\"text/javascript\">alert(\"Registration is conform\")</script>";
	//    header("location:index.php");
	} 
	else
	 {
		header("Location: login_rg.php");
		// echo "<script type=\"text/javascript\">alert(\"could not Registration conform:" . mysqli_error($conn) . "\")</script>";
		// echo "please enter other id";
	}

}





// $sql1="INSERT INTO otp() VALUES ('$name','$E_mail','$password')";
// $sql="INSERT INTO otp(otp_number) VALUES ('$otp01')";
        
// if (mysqli_query($conn,$sql)) {
// 	echo "<script type=\"text/javascript\">alert(\"Registration is conform\")</script>";
// //    header("location:index.php");
// } 
// else
//  {
// 	echo "<script type=\"text/javascript\">alert(\"could not Registration conform:" . mysqli_error($conn) . "\")</script>";
// 	echo "please enter other id";
// }




echo $otp01;
$receiverEmail= $_POST['email'];//$_POST['email1'];
$subject="jungle book";
$emailbody="Your 6 Digit OTP Code: ";

echo smtp_mailer($receiverEmail,$subject,$emailbody.$otp);


function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "luvanidixit101@gmail.com"; //write sender email address
	$mail->Password = "pvjz zfhd atmq xxzg"; //write app password of sender email
	$mail->SetFrom("luvanidixit101@gmail.com"); //write sender email address
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{

		  header("Location: form02.php");
		//header("Location: form02.php?otp01=$otp01");
        
	}
}

    // }
?>



