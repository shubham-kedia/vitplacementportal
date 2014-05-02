<html>
<head>
<link href="/bsnl/css/a.css" rel="stylesheet" type="text/css" />

</head>
<?php
include $_SERVER['DOCUMENT_ROOT'] . 'bsnl/functionothers.php';
//include("connectdb.php");
			
// For image database and profile updation


function getPosts1()
{

$qr1= mysql_query("SELECT id FROM test_image where email='$_SESSION[email]'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/bsnl/image.php?id=$ids' width=310 height=310 />";

}

function getfloor()
{

$qr2=mysql_query("SELECT floor FROM employee1 where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);

$floor=$result['floor'];
return $floor;


}


function getofficeno()
{
$qr2=mysql_query("SELECT officeno FROM employee1 where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$officeno=$result['officeno'];
return $officeno;

}


function getbranch()
{
$qr2=mysql_query("SELECT branch FROM employee1 where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$branch=$result['branch'];
return $branch;

}






$broadband=0;
$landline=0;
$mobile=0;
$threeg=0;
function getdepartment()
{$qr2=mysql_query("SELECT broadband,landline,mobile,threeg FROM employee1 where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
 global $broadband;
  $broadband=$result['broadband'];
global $landline;
$landline=$result['landline'];
global $mobile;
$mobile=$result['mobile'];
global $threeg;
$threeg=$result['threeg'];
}



 function getbroadbandimage()
{
global $broadband;
if($broadband==1)

{
$qr1= mysql_query("SELECT id FROM images where name='broadband'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/bsnl/imagedept.php?id=$ids' width=254 height=93 />";
}
}

 function getthreegimage()
{global $threeg;
if($threeg==1)
{
$qr1= mysql_query("SELECT id FROM images where name='threeg'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/bsnl/imagedept.php?id=$ids' width=254 height=93 />";
}
}
function getlandlineimage()
{

global $landline;
if($landline==1)
{
$qr1= mysql_query("SELECT id FROM images where name='landline'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/bsnl/imagedept.php?id=$ids' width=254 height=93 />";

}
}



function getposts3()
{
$query=mysql_query("SELECT * FROM employee1 where email <> '$_SESSION[email]'") or die(mysql_error());
while($result=mysql_fetch_assoc($query))
{
$qr1=mysql_query("SELECT id FROM test_image where email='$result[email]'") or die(mysql_error());
$idd=$result['email'];
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<a href=otherprofile.php?id=$idd><img src=image.php?id=$ids width=280 height=280/></a><br/>";
echo $result['username'];
echo"<br/><br/><br/>";


}
mysql_close();
}


function getdepartmentteam($l)
{
$qr2=mysql_query("SELECT branch FROM employee1 where email= '$_SESSION[email]'") or die(mysql_error()) ;
$row=mysql_fetch_assoc($qr2);
$ids=$row['branch'];

$query=mysql_query("SELECT * FROM employee1 where branch='$ids' and $l=1") or die(mysql_error());
while($result=mysql_fetch_assoc($query))
{
$qr1=mysql_query("SELECT id FROM test_image where email='$result[email]'") or die(mysql_error());
$idd=$result['email'];
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<a href=/bsnl/otherprofile.php?id=$idd><img src=/bsnl/image.php?id=$ids width=280 height=280/></a><br/>";
echo $result['username'];
echo"<br/><br/><br/>";


}

mysql_close();
}


function getcomplaints()
{
$qr2=mysql_query("SELECT broadband,landline,mobile,threeg,designation,branch FROM employee1 where email='$_SESSION[email]'") or die(mysql_error()) ;
$row=mysql_fetch_assoc($qr2);
$broadband1=$row['broadband'];
$landline1=$row['landline'];
$mobile1=$row['mobile'];
$threeg1=$row['threeg'];
$designation =$row['designation'];
$branch1=$row['branch'];

$array=array(
"broadband"=>$broadband1,
"landline"=>$landline1,
"mobile"=>$mobile1,
"threeg"=>$threeg1);

$k=array();
$k=array_keys($array,1);

$m=count($k);



for($j=0;$j<$m;$j++)

{

$qr1=mysql_query("SELECT id,name,email,phoneno,title,content,time FROM complaint where department='$k[$j]' and subdepartment='$designation' and branch='$branch1' and status='0'") or die(mysql_error());




while($row1=mysql_fetch_assoc($qr1))
{

$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href=/bsnl/otherprofile.php?id=$k>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
 
echo "<div id=\"complaint\">";

	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href=/bsnl/otherprofile.php?id=$idd>";
 echo $row1['name'];
  echo"</a>";
  echo"</div>";
		 
		 echo "<div id=\"phone\">";
	echo $row1['phoneno'];
	echo "<br/><br/>";
	 echo"</div>";
	  echo "<div id=\"email\">";
	echo $row1['email'];
	 echo"</div>";
	echo "<br/><br/>";
		echo "<div id=\"title\">";
	echo"Title :   ";echo $row1['title'];
		echo"</div>";
	
	 echo "<div id=\"content\">";
	echo $row1['content'];
	 echo"</div>";
	  echo "<div id=\"time\">";
	echo $row1['time'];
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";
 

 echo "<div id=\"solution\">";
echo"Solution:";

echo"<p>";
$t=$row1['id'];
echo"<form action=/bsnl/complaints/addcomment.php?postid=$t method='post'> ";
          echo"<textarea name='comment' id='comment'rows='1'cols='72' ></textarea>";

  echo"<input name='submit' type='submit' id='submit' value='Submit' />";
         echo" </p>";
echo"</form>";

echo"</div>";

echo"<div id=\"othercomments\">";
$t=$row1['id'];
 $qr = mysql_query("SELECT * FROM comment where postid='$t'");
 while($row=mysql_fetch_assoc($qr))
 {
 $idd=$row['email'];
 echo "<div id=\"name1\">";
 echo"<a href=/bsnl/otherprofile.php?id=$idd>";
 echo $row['name'];
  echo"</a>";
  echo"</div>";
  echo "<div id=\"content1\">";
echo $row['cont'];
 echo"</div>";
   echo "<div id=\"time\">";
echo"Posted:"; echo"\n";echo $row['timestamp'];
 echo"</div>";
  echo"<br>";
   echo"<br>";
 }
echo"</div";

echo "<div id=\"spacer\">";
 echo"</div>";
 echo "<div id=\"spacer\">";
 echo"</div>";
 echo "<div id=\"spacer\">";
 echo"</div>";
}

}
mysql_close();
}

function getcomplaintscustomer($l)
{  $s=0;

echo"<div id=\"review1\">";
echo"<form method='post'> ";
 echo"<input type=\"submit\"  name=\"unresolved\" value=\"View Resolved\">";
 echo"</form>";
 echo"</div>";
 if(isset($_POST['unresolved']))
 {
 $s=1;
 }
$qr3=mysql_query("SELECT id,name,email,phoneno,title,content,time,status FROM complaint where email='$_SESSION[email]' and department='$l' and status='$s'") or die(mysql_error());




while($row1=mysql_fetch_assoc($qr3))
{

echo"<div id=\"complaint\">";



	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href=/bsnl/otherprofile.php?id=$idd>";
 echo $row1['name'];
  echo"</a>";
  echo"</div>";
		 
		 echo "<div id=\"phone\">";
	echo $row1['phoneno'];
	echo "<br/><br/>";
	 echo"</div>";
	  echo "<div id=\"email\">";
	echo $row1['email'];
	 echo"</div>";
	echo "<br/><br/>";
		echo "<div id=\"title\">";
	echo"Title :   ";echo $row1['title'];
		echo"</div>";
	
	 echo "<div id=\"content\">";
	echo $row1['content'];
	 echo"</div>";
	  echo "<div id=\"time\">";
	echo $row1['time'];
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";
 
 $t=$row1['id'];
  echo"<div id=\"resolved\">";
  if($row1['status']==1)
 {
 
 echo"<form action=/bsnl/complaints/repostresolved.php?postid=$t and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"REPOST?\">";
 echo"</form>";
echo"</div>";
}
elseif($row1['status']==0)
 {
 
 echo"<form action=/bsnl/complaints/resolved.php?postid=$t  method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"Resolved?\">";
 echo"</form>";
echo"</div>";
}




 echo "<div id=\"solution\">";
echo"Solution:";
$t=$row1['id'];
echo"<p>";
echo"<form action=/bsnl/complaints/addcomment.php?postid=$t method='post'> ";
          echo"<textarea name='comment' id='comment'rows='1'cols='72' ></textarea>";

  echo"<input name='submit' type='submit' id='submit' value='Submit' />";
         echo" </p>";
echo"</form>";

echo"</div>";
 echo "<div id=\"spacer\">";
 echo"</div>";
echo"<div id=\"othercomments\">";
 $qr = mysql_query("SELECT * FROM comment where postid='$t'");
 while($row=mysql_fetch_assoc($qr))
 {
 $idd=$row['email'];
 echo "<div id=\"name1\">";
 echo"<a href=/bsnl/otherprofile.php?id=$idd>";
 echo $row['name'];
  echo"</a>";
  echo"</div>";
  echo "<div id=\"content1\">";
echo $row['cont'];
 echo"</div>";
   echo "<div id=\"time\">";
echo"Posted:"; echo"\n";echo $row['timestamp'];
 echo"</div>";
  echo"<br>";
   echo"<br>";
 }
echo"</div";

echo "<div id=\"spacer\">";
 echo"</div>";
 
 echo "<div id=\"liner\">";
 echo"End of Complaint";
 echo"</div>";
 echo "<div id=\"spacer\">";
 echo"</div>";
}






mysql_close();
}



?>
