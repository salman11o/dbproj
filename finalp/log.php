<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dbproject');
$email=$_POST['email'];
$pas=$_POST['pass'];
$q="select * from user where email = '$email' && password = '$pas' && type='A'";
$q1="select * from user where email = '$email' && password = '$pas' && type='U'";
$result=mysqli_query($con,$q);
$result1=mysqli_query($con,$q1);
$num=mysqli_num_rows($result);
$num1=mysqli_num_rows($result1);
if($num==1)
{
	$_SESSION['em']=$email;
	header("Location:admv1.php");
}
else if($num1=1)
{$_SESSION['em']=$email;
	header("Location:index1.php");

}
else
{
	header("Location:login.php");
}
?>