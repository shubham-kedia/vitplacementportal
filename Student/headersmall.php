<?php
include("include/connect.php");
session_start();

$s=$_SESSION['suser'];


$s1=mysql_fetch_array(mysql_query("select * from slogin where name='$s'"));
$s2=mysql_fetch_array(mysql_query("select * from suser where username='$s'"));
$n2=mysql_num_rows(mysql_query("select * from suser where username='$s'"));

?>
<html>
<head>
<link href="css/a.css" rel="stylesheet" type="text/css" />
<link href="css/smooth.css" rel="stylesheet" type="text/css" />
<link href="css/my.css" rel="stylesheet" type="text/css" />
</head>

<body>



<div id="vtop">
</div>

<div id="menu" class="smooth">

<?php

echo"<ul>";

echo"<li><a href='/vit/student/index1.php'>Home</a></li>";
echo"<li><a>Portal</a></li>";

echo"<li><a href='/vit/student/logout.php'>Logout</a></li>";
echo"</ul>";
?>


</div>

<div id="newtop">

<div id="logo" class="fontc">
<a href="/vit/student/index.php"><img src="images/mailogo.png" height="156" width="310"></img></a>
</div>

</div>





</body>
</html>
