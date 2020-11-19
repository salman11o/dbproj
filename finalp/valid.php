<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbproject');
$email=$_POST['email1'];
$pas=$_POST['pass1'];
$user=$_POST['user'];
$no=$_POST['no'];
$gen=$_POST['gender'];
$q="select * from user where email = '$email' || username='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
	
	header("Location:coming.php");
	echo "Duplicate Data";
}
else
{	$_SESSION['em1']=$email;
	$q1="INSERT INTO user(email, password, username, ph_no, gender, type) VALUES ('$email','$pas','$user','$no','$gen','U')";
	mysqli_query($con,$q1);
	header("Location:login.php");
}
?>