<?php

session_start();

?>
<html>
<head>
<link href="css/a.css" rel="stylesheet" type="text/css" />
<link href="css/smooth.css" rel="stylesheet" type="text/css" />
</head>

<body>



<div id="vtop">
</div>

<div id="menu" class="smooth">

<?php
if(isset($_SESSION['email']))
{
if ($_SESSION['type']=='customer')
{
echo "customer";
$b='/bsnl/customer/custprofile.php';
}
else if($_SESSION['type']=='employee')
{echo"employee";
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

<div id="newtop">

<div id="logo" class="fontc">
<a href="/bsnl/index.php"><img src="/bsnl/images/mailogo.png" height="156" width="310"></img></a>
</div>

</div>





</body>
</html>
