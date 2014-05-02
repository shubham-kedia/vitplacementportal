

<html>
<head>
<link href="/vit/css/a.css" rel="stylesheet" type="text/css" />
<link href="/vit/css/smooth.css" rel="stylesheet" type="text/css" />
</head>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/vit/headersmall.php';
?>


<div id="dp">
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/vit/functions.php';
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


<div id="bar" class="smooth">
<ul>
<li><a href="/vit/jobs/makejob.php" >NewJobs</a></li>
<li><a href="/vit/listmembers.php" >View staff</a></li>
<li><a href="/vit/jobs/viewjobs.php" >View-Jobs</a></li>
</ul>
</div>









<div id="address" class="fonc">


</div>

<div id="profile">
<a href="/vit/upload.php"><image src="/vit/images/profile.png" width:307px height:27px></img></a>
</div>


<br>
<div id="info1">
<a href="/vit/customer/custinfo.php"><image src="/vit/images/update.png" width:307px height:27px></img></a>
</div>



<div id="department">

<div >
<a href="/vit/cse/viewcseitjobs.php">
<?php
getdepartment();
getcseitimage();
?>


</a>
<a href="/vit/eee/vieweeejobs.php">
<?php
getdepartment();
geteeeimage();
?>
</a>


<a href="/vit/ece/viewecejobs.php">
<?php
getdepartment();
geteceimage();
?>
</a>


</a>
<a href="/vit/mech/viewmechjobs.php">
<?php
getdepartment();
getmechimage();
?>
</a>
</div>
</div >

</body>
</html>
