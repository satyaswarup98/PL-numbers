<?php 
	
	session_start();
	error_reporting(1);

	$conn=mysqli_connect("localhost","root","","pl_number");

	$name=$_POST['name'];
	$username=$_POST['user_name'];
	$pass=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$dob=$_POST['birth_date'];
	$pincode=$_POST['pincode'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	

		$query="INSERT INTO user(id,name,userid,password,gender,address,country,state,date_of_birth,pincode,phone,email) VALUES (null,'$name','$username','$pass','$gender','$address','$country','$state','$dob','$pincode','$phone','$email')";
		$result=mysqli_query($conn,$query);


		if($result)
		{
			echo '<script language="javascript">';
			echo 'alert("Registered successfully")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Not Registered!!")';
			echo '</script>';
		}

 ?>