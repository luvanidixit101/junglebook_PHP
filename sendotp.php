<?php
include('smtp/PHPMailerAutoload.php');

$otp=rand(100000,999999);
$receiverEmail="luvanidixitluvani@gmail.com";
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
		
	}
}

?>