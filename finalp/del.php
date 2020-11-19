<?php
session_start();
$con=mysqli_connect('localhost','root','','dbproject');

$email=$_POST('id');

$q="delete * from user where email='$email'";
$q3="delete * from payments where booking_id=select booking_id from bookings where email='$email' order by bookings.booking_id limit 1";
$q1="delete * from bookings where email='$email' order by bookings.booking_id limit 1";
$q2="delete * from tickets where email='$email' order by tickets.ticket_id limit 1";
$qa=mysqli_query($con,$q3);
$qb=mysqli_query($con,$q1);
$qc=mysqli_query($con,$q2);
$qd=mysqli_query($con,$q);
if($qa==1 && $qb==1 && $qc==1 && $qd==1)
{
	header("Location:amv1.php");
}
else
{
header("Location:index.php");
}

?>