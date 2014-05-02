<?php
include("include/connect.php");

$img=$_REQUEST['id'];
$img=stripcslashes($img);
echo $img;

$image = mysql_query("SELECT * FROM suser WHERE username='$img'")or die(mysql_error());

$image = mysql_fetch_assoc($image);
//header("content-type:image/jpeg");
//echo $image['pic'];
?>