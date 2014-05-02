<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db('android_api',$con) or die(mysql_error()); 
$pid=$_GET['postid'];

$order = "INSERT INTO comment(postid,name, email, cont,)VALUES('$pid','$_SESSION[user]','$_SESSION[email]','$_POST[comment]')";

if($_SESSION['type']=='employee')
{if( mysql_query($order))
echo "<script>alert('Your comment has been added');window.location.href='http://localhost/bsnl/complaints/viewcomplaints.php'</script>";
else "<script>alert('Comment could not be added');window.location.href='http://localhost/bsnl/complaints/viewcomplaints.php'</script>";
}
elseif($_SESSION['type']=='customer')
{
if( mysql_query($order))

echo "<script>alert('Your comment has been added');window.location.href='http://localhost/bsnl/broadband/viewstatus.php'</script>";
else "<script>alert('Comment could not be added');window.location.href='http://localhost/bsnl/complaints/viewcomplaints.php'</script>";
}
?>