

<html>
<head>
<link href="/bsnl/css/a.css" rel="stylesheet" type="text/css" />
<link href="/bsnl/css/smooth.css" rel="stylesheet" type="text/css" />
</head>
<?php
include $_SERVER['DOCUMENT_ROOT'] . 'bsnl/headersmall.php';
?>


<div id="dp">
<?php

include $_SERVER['DOCUMENT_ROOT'] . 'bsnl/functions.php';
if(isset ($_SESSION['email']))
{
getPosts1();
}
else

{
header("Location:/bsnl/profilelogin.php");
}
?>
</div>


<div id="bar" class="smooth">
<ul>
<li><a href="/bsnl/complaints/viewcomplaints.php" >Complaints</a></li>
<li><a href="/bsnl/listmembers.php" >View staff</a></li>
<li><a href="/bsnl/messages/messages.php" >Messages</a></li>
</ul>
</div>









<div id="address" class="fonc">


</div>

<div id="profile">
<a href="/bsnl/upload.php"><image src="/vit/images/profile.png" width:307px height:27px></img></a>
</div>


<br>
<div id="info1">
<a href="/bsnl/check.php"><image src="/bsnl/images/update.png" width:307px height:27px></img></a>
</div>



<div id="department">

<div >
<a href="broadband/broadband.php">
<?php
getdepartment();
getcseitimage();
?>


</a>
<a href="threeg.php">
<?php
getdepartment();
geteeeimage();
?>
</a>


<a href="landline.php">
<?php
getdepartment();
geteceimage();
?>
</a>

</div>
</div >




<div id="info">
<?php

$f=getfloor();
$o=getofficeno();
$b=getbranch();

?>

<div>
Office no: <?php echo $o?>
</div>
<div>
Floor No: <?php echo $f?>
</div>
<div>
Branch:    <?php echo $b?>
</div>

</div>









</body>
</html>
