<?php
session_start();
if(isset($_POST['submit']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
header( "Location: change_password.html" );
}
else{
echo '<script language="javascript">';
echo 'alert("Invalid OTP")';
echo '</script>';
}
}

//resend OTP
if(isset($_POST['resend']))
{
$_SESSION['email']=$_SESSION['email'];
echo '<script language="javascript">';
echo 'alert("Sucessfully resend OTP to your mail.")';
echo '</script>';
header( "Location: abc.php" );
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="" >
                        <h1>OTP </h1>
                
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                           
                       
                           <div class="form-group">
								<label for="otp">One Time Password :</label>
								<input type="text" name="otpvalue" id="otp" pattern="[\d*]{6,}" maxlength="6" required/ />
							</div>   
						
                        <div class="form-submit">
                            <input type="submit" value="RESEND OTP" class="submit" name="resend" id="resend" />
                            <input type="submit" value="SUBMIT" class="submit" name="submit" id="submit" />
                        </div>
						
							
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>