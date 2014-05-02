

<html>
<head>
<link href="/vit/css/a.css" rel="stylesheet" type="text/css" />
<link href="/vit/css/smooth.css" rel="stylesheet" type="text/css" />
</head>
<?php
include $_SERVER['DOCUMENT_ROOT'] . 'vit/headersmall.php';
?>


<div id="dp">
<?php

include $_SERVER['DOCUMENT_ROOT'] . 'vit/functions.php';
if(isset ($_SESSION['email']))
{
getPosts1();
}
else

{
header("Location:/vit/profilelogin.php");
}
?>
</div>








<div id="info">
</div>

<div id="department">

<div >
<a href="/vit/broadband/broadband.php">
<?php
getdepartment();
getbroadbandimage();
?>


</a>
<a href="threeg.php">
<?php
getdepartment();
getthreegimage();
?>
</a>


<a href="landline.php">
<?php
getdepartment();
getlandlineimage();
?>
</a>



</div>







<divid="list">

<a href="/vit/listmembers.php" ><img src="/vit/images/viewothers.png"></img></a>
</div>


</body>
</html>
