<?php



include("connectdb.php");
			
// For image database and profile updation


function getPostsothers($k)
{
$qr1= mysql_query("SELECT id,email FROM test_image where email='$k'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['email'];
echo "<img src=/vit/image.php?id=$ids width=310 height=310 />";
}



function getofficenoothers($k)
{


$qr2=mysql_query("SELECT officeno FROM employee1 where email= '$k'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$officeno=$result['officeno'];
return $officeno;
}


function getbranchothers($k)
{


$qr2=mysql_query("SELECT branch FROM employee1 where email= '$k'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$branch=$result['branch'];
return $branch;
}






$broadband=0;
$landline=0;
$mobile=0;
$threeg=0;



function getdepartmentothers($k)
{


$qr2=mysql_query("SELECT broadband,landline,mobile,threeg FROM employee1 where email= '$k'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
 global $broadband;
  $broadband=$result['broadband'];
global $landline;
$landline=$result['landline'];
global $mobile;
$mobile=$result['mobile'];
global $threeg;
$threeg=$result['threeg'];}



 function getbroadbandimageothers()
{
global $broadband;
if($broadband==1)

{
$qr1= mysql_query("SELECT id FROM images where name='broadband'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src=imagedept.php?id=$ids width=254 height=93 />";
}
}

 function getthreegimageothers()
{global $threeg;
if($threeg==1)
{
$qr1= mysql_query("SELECT id FROM images where name='threeg'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src=imagedept.php?id=$ids width=254 height=93 />";
}
}
function getlandlineimageothers()
{

global $landline;
if($landline==1)
{
$qr1= mysql_query("SELECT id FROM images where name='landline'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src=imagedept.php?id=$ids width=254 height=93 />";

}
}


?>