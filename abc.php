<?php 
    session_start();
  $conn=mysqli_connect("localhost","root","","pl_number");
   
    $username=$_POST['user_name'];
    $email=$_POST['email'];

    $query="SELECT * from user WHERE userid='$username' and email='$email'";
    $result = mysqli_query($conn,$query);   
    $count = mysqli_num_rows($result);
    
    if($count==1){




$rndno=rand(100000, 999999);//OTP generate 
$message = urlencode("otp number.".$rndno); 
if(isset($_POST['email'])){
$address=$_POST['email']; 
}
else{
	$address=$_SESSION['email']; 
}

require_once('PHPMailer/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$mail->IsSMTP();
$mail->Host = "smtp.rediffmail.com";
$mail->Port = 25;
//$mail->SMTPSecure = "tls";
//$mail->Port = 587;
// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'shipra_khattri@rediffmail.com';
$mail->Password = 'shiprabhu';


$mail->From         = 'shipra_khattri@rediffmail.com';
$mail->FromName     = 'Employee Registration';
$mail->AddReplyTo("info@abc.com","Admin"); 
$mail->AddAddress($address);

$mail->Subject    = "OTP for Employee Registration";
$body             = "Your OTP for registration is : ".$rndno."";

$mail->MsgHTML($body);


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;  
} else {
 // echo "Message sent!";
 // header( "timezone_location_get()on: otp.php" );
 // if(isset($_POST['encrypt'])) {
	
	$_SESSION['user_name']=$_POST['user_name']; 
	$_SESSION['email']=$_POST['email']; 
	$_SESSION['otp']=$rndno;
	header( "Location: otp.php" ); 
 // }
}


  }
       
    else
       {
            echo '<script language="javascript">';
            echo 'alert("INVALID ID AND EMAIL");';
            echo 'window.location.href = "forgot_password.php";';
            echo '</script>';

       }

?>
