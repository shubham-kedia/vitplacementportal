<?php
include $_SERVER['DOCUMENT_ROOT'] . '/vit/headersmall.php';
$con=mysql_connect("localhost","root","");
mysql_select_db('vitp',$con) or die(mysql_error()); 
$pid=$_GET['postid'];
$t=$_GET['peid'];





  if($_SESSION['type']=='employee')
{

$order = "update jobs SET $t='0' where email='$_SESSION[email]' and ids='$pid'";



if( mysql_query($order,$con))
{
echo"hi:";
echo "<script>alert('Thank you for visiting VIT PAT Centre');window.location.href='http://localhost/vit/jobs/viewjobs.php'</script>";
}
else
{
echo "<script>alert('Comment could not be added');window.location.href='http://localhost/vit/jobs/viewjobs.php'</script>";

}
}
else
{
echo "<script>alert('You dont have permission to resolve this request');window.location.href='http://localhost/vit/jobs/viewjobs.php'</script>";
}





?>