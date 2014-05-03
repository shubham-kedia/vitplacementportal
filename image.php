<?php
$img=$_REQUEST['id'];
$img=stripcslashes($img);


include 'connectdb.php';

$image = mysql_query("SELECT * FROM test_image WHERE email='$img'");

$image = mysql_fetch_assoc($image);
header("content-type:image/jpeg");
echo $image['image'];
?>