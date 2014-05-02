<?php 
include("../connectdb.php");
$comp=$_GET['comp'];
$reg=$_GET['reg'];
$qr=mysql_fetch_array(mysql_query("select * from applied where regno='$reg' and company='$comp'"));
$q1="update applied set selected='1' where regno='$reg' and company='$comp'";
$q2="update suser set placed='1',company='$comp',jobname='$qr[jobname]' where regno='$reg'";
if(mysql_query($q1)&&mysql_query($q2))
echo "<script> alert('Selected');location.reload();window.location.href='students.php?postname=$qr[jobname]&uname=$comp';</script>";
else echo mysql_error();
?>
