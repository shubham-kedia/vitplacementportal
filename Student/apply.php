<?php 
include("headersmall.php"); 
$us=$_GET['id'];
$us1=$_GET['id1'];

	$str=$s2['fname']." ".$s2['lname'];
	//$qr1="insert into $us values ('$s2[regno]','$str','$us1','0')";
	$qr2="insert into applied values ('$s2[regno]','$str','$us1','$us','0')";
	if(mysql_query($qr2))
	echo"<script>alert('Succesfully applied for Job');window.location.href='jobs.php';</script>";
    else echo"<script>alert('Error.Apply Failed OR Already Aplied');window.location.href='jobs.php';</script>";
	?>