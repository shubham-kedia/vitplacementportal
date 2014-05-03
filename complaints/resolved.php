<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db('android_api',$con) or die(mysql_error()); 
$pid=$_GET['postid'];


  if($_SESSION['type']=='customer')
{
$order = "update complaint SET status='1' where email='$_SESSION[email]' and id='$pid'";



if( mysql_query($order))

echo "<script>alert('Thank you for using BSNL Cusotmer care');window.location.href='http://localhost/bsnl/broadband/viewstatus.php'</script>";
else "<script>alert('Comment could not be added');window.location.href='http://localhost/bsnl/broadband/viewstatus.php'</script>";

}
else
{
echo "<script>alert('You dont have permission to resolve this request');window.location.href='http://localhost/bsnl/broadband/viewstatus.php'</script>";
}





?>