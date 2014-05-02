<?php 

session_start();
if(!isset($_SESSION['suser']))
{echo "<script> window.location.href='./index.php';</script>";
	}



$s=$_SESSION['suser'];


$s1=mysql_fetch_array(mysql_query("select * from slogin where name='$s'"));
$s2=mysql_fetch_array(mysql_query("select * from suser where username='$s'"));
$n2=mysql_num_rows(mysql_query("select * from suser where username='$s'"));

?>
	
     