<?php

include $_SERVER['DOCUMENT_ROOT'] . '/vit/headersmall.php';
include $_SERVER['DOCUMENT_ROOT'] . '/vit/connectdb.php';
$pid=$_GET['postid'];
$t=$_GET['peid'];


  if($_SESSION['type']=='employee')
{
$order = "update jobs SET $t='1' where email='$_SESSION[email]' and ids='$pid'";



if( mysql_query($order))

echo "<script>alert('Thank you for visiting VIT PAT Center');window.location.href='http://localhost/vit/jobs/viewjobs.php'</script>";
else "<script>alert('Comment could not be added');window.location.href='http://localhost/vit/jobs/viewstatus.php'</script>";

}
else
{
echo "<script>alert('You dont have permission to resolve this request');window.location.href='http://localhost/vit/jobs/viewstatus.php'</script>";
}





?>