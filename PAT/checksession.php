<?php 
include("include/connect.php");
session_start();
if(!isset($_SESSION['pat']))
{echo "<script> window.location.href='./index.php';</script>";
	}



$s=$_SESSION['pat'];


$s1=mysql_fetch_array(mysql_query("select * from pat where username='$s'"));

$n2=mysql_num_rows(mysql_query("select * from pat where username='$s'"));

?>
	
     