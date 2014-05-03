<?php session_start();?>
<html>
<head>
<link href="/bsnl/css/a.css" rel="stylesheet" type="text/css" />
<link href="/bsnl/css/smooth.css" rel="stylesheet" type="text/css" />
</head>

<body>



<div id="vtop1">
</div>

<div id="menu1" class="smooth">


<?php
if(isset($_SESSION['email']))
{
if ($_SESSION['type']=='customer')
{

$b='/bsnl/customer/custprofile.php';
}
else if($_SESSION['type']=='employee')
{
$b='/bsnl/profile.php';
}
}
else
{
$b='/bsnl/customer/custprofile.php';
}
echo"<ul>";

echo"<li><a href='/bsnl/index.php'>Home</a></li>";
echo"<li><a href='$b'> Profile</a></li>";
echo"<li><a>Portal</a></li>";

echo"<li><a href='/bsnl/logout.php'>Logout</a></li>";
echo"</ul>";
?>


</div>

<div id="newtop1">

<div id="logo" class="fontc">
<a href="/bsnl/broadband/broadband.php"><img src="/bsnl/broadband/images/broadband.png" height="152" width="337" style="border-left-width: 0px; margin-left: 39px;"></img></a>
</div>

</div>





</body>
</html>
