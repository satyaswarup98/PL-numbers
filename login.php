<?php 
	
	session_start();
	error_reporting(1);

	$conn=mysqli_connect("localhost","root","","pl_number");
	if($conn)
		echo "connected ";
	else
		echo "not connected ";

	$username=$_POST['user_name'];
	$pass=$_POST['password'];

	$query="SELECT * from user WHERE user_name='$username' and password='$pass'";
	$result = mysqli_query($conn,$query);   
    $count = mysqli_num_rows($result);
	
	
	
 	
 	if($count>=1){
 		echo "found "; 	
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_name'];
			}
	}else{
 		echo "not found";
	}

 ?>