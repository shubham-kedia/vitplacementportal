

<html>
<head>
<link href="css/a.css" rel="stylesheet" type="text/css" />
<link href="css/smooth.css" rel="stylesheet" type="text/css" />
</head>
 <?php include("headersmall.php")?>


<a href='index.php'>
<div id="dp">
<?php
$k=$_REQUEST['id'];





include("functionothers.php");
if(isset ($_SESSION['email']))
{
getPostsothers($k);
}
else

{
header("Location:profilelogin.php");
}
?>
</div>
</a>
<div id="board">


<div id="bar" class="smooth">
<ul>

<li><a href="/bsnl/messages/messages.php?id=$k" >Message</a></li>
</ul>
</div>


<div id="address" class="fonc">
<?php

$f=getfloorothers($k);
$o=getofficenoothers($k);
$b=getbranchothers($k);

?>


<div>
Office no: <?php echo $o."\n\n"?>
</div>
<div>
Floor No: <?php echo $f?>
</div>
<div>
Branch:    <?php echo $b?>
</div>


</div>
</div>






<div id="info">
</div>

<div id="department">

<div >
<a href="broadband/broadband.php">
<?php
getdepartmentothers($k);
getbroadbandimageothers();
?>


</a>
<a href="threeg.php">
<?php
getdepartmentothers($k);
getthreegimageothers();
?>
</a>


<a href="landline.php">
<?php
getdepartmentothers($k);
getlandlineimageothers();
?>
</a>



</div>




</div>




<a href="listmembers.php" ><img src="viewothers.png"></img></a>

</body>
</html>
