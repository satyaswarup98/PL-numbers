 <?php
        session_start();
        $conn=mysqli_connect("localhost","root","","pl_number");

            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['confirm_password'];
            $q = "SELECT password FROM user WHERE userid='$username'";
            $result = mysqli_query($conn,$q);

            if(!$result)
            {
                echo "The username you entered does not exist";
            }

            if($password==$cpassword)
                $sql=mysqli_query($conn,"UPDATE user SET password='$password' where userid='$username'");
            
            if($sql)
            {
                echo "Congratulations You have successfully changed your password";
            }
            else
            {
                echo "Passwords do not match";
            }
?>