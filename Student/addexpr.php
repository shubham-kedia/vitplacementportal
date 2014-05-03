<?php

include("headersmall1.php"); 
include("checksession.php"); 
$order = "update suser set comment='$_POST[comment]'where username='$s2[username]'";
if( mysql_query($order))
echo "<script>alert('Your comment has been added/updated');window.location.href='hello.php'</script>";
else echo"<script>alert('Comment could not be added');window.location.href='hello.php'</script>";

?>