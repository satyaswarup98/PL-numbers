
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>

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
                    <form method="POST" class="register-form" id="register-form"  name="encryptEmail" method="post" action="abc.php" onsubmit="encrypt.disabled = true; return true;">
                        <h1>Forgot Password </h1>
                
                       <br>
                       <br>
                       <br>
                            <div class="form-group">
                                <label for="user_name">Username :</label>
                                <input type="text" name="user_name" id="user_name" required/>
                            </div>
                       
                           <div class="form-group">
								<label for="email">Email ID :</label>
								<input type="email" name="email" id="email" required/>
							</div>   
						
                        <div class="form-submit">
                            <input type="reset" value="RESET" class="submit" name="reset" id="reset" />
                            <input type="submit" value="SUBMIT" class="submit" id="submit" name="encrypt" />
                        </div>
						
							<br>
							<br>
							<a href="index.html" for="new_user" style="color: #ff6801; font-family: 'Montserrat'; font-size: 14px; font-weight: bold;"><u>Back</u></a>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>