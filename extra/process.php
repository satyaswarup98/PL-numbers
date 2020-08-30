<?php 
session_start(); 
$rndno=rand(100000, 999999);//OTP generate 
$message = urlencode("otp number.".$rndno); 
$to=$_POST['email']; 
$subject = "OTP"; 
$txt = "OTP: ".$rndno."";
$headers = "From: otp@postmanreply.com" ; 
mail($to,$subject,$txt,$headers); 


if(isset($_POST['encrypt'])) {
	$_SESSION['name']=$_POST['name']; 
	$_SESSION['email']=$_POST['email']; 
	$_SESSION['otp']=$rndno; 
	header( "Location: otp.php" ); 
} 
?>