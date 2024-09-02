<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$uname=$_POST['uname'];
	$upassword=$_POST['upassword'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"update `user` set uname='$uname', upassword='$upassword', email='$email' where userid='$id'");
	header('location:vu.php');
?>