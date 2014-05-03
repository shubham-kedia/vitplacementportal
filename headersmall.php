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
$b='/vit/customer/custprofile.php';
}
else if($_SESSION['type']=='employee')
{echo"employee";
$b='/vit/profile.php';
}
}
else
{
$b='/vit/customer/custprofile.php';
}
echo"<ul>";

echo"<li><a href='/vit/index.php'>Home</a></li>";
echo"<li><a href='$b'> Profile</a></li>";
echo"<li><a>Portal</a></li>";

echo"<li><a href='/vit/logout.php'>Logout</a></li>";
echo"</ul>";
?>


</div>

<div id="newtop">

<div id="logo" class="fontc">
<a href="/vit/index.php"><img src="../vit/images/mailogo.png" height="100" width="340"></img></a>
</div>

</div>





</body>
</html>
