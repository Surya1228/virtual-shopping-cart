<?php
	include('conn.php');
 
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"insert into `user_auth` (name,password,email) values ('$name','$password','$email')");
	 header("Location: ../userlogin.html");
 
?>