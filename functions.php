<html>
<head>
<link href="/vit/css/a.css" rel="stylesheet" type="text/css" />

</head>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/vit/functionothers.php';
//include("connectdb.php");
			
// For image database and profile updation


function getPosts1()
{

$qr1= mysql_query("SELECT id,email FROM test_image where email='$_SESSION[email]'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['email'];
echo "<img src='/vit/image.php?id=$ids' width=310 height=310 />";

}

function getfloor()
{

$qr2=mysql_query("SELECT floor FROM cuser where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);

$floor=$result['floor'];
return $floor;


}


function getofficeno()
{
$qr2=mysql_query("SELECT officeno FROM cuser where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$officeno=$result['officeno'];
return $officeno;

}


function getbranch()
{
$qr2=mysql_query("SELECT branch FROM cuser where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
$branch=$result['branch'];
return $branch;

}






$cseit=0;
$eee=0;
$ece=0;
$mech=0;
function getdepartment()
{$qr2=mysql_query("SELECT cseit,eee,ece,mech FROM cuser where email= '$_SESSION[email]'") or die(mysql_error()) ;
$result=mysql_fetch_assoc($qr2);
 global $cseit;
  $cseit=$result['cseit'];
global $eee;
$eee=$result['eee'];
global $ece;
$ece=$result['ece'];
global $mech;
$mech=$result['mech'];
}



 function getcseitimage()
{
global $cseit;
if($cseit==1)

{
$qr1= mysql_query("SELECT id FROM images where name='cseit'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/vit/imagedept.php?id=$ids' width=254 height=93 />";
}
}

 function getmechimage()
{global $mech;
if($mech==1)
{
$qr1= mysql_query("SELECT id FROM images where name='mech'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/vit/imagedept.php?id=$ids'/>";
}
}


 function geteceimage()
{global $ece;
if($ece==1)
{
$qr1= mysql_query("SELECT id FROM images where name='ece'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/vit/imagedept.php?id=$ids' width=258 height=93 />";
}
}
function geteeeimage()
{

global $eee;
if($eee==1)
{
$qr1= mysql_query("SELECT id FROM images where name='eee'") or die(mysql_error());
$row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "<img src='/vit/imagedept.php?id=$ids' width=254 height=93 />";

}
}



function getposts3()
{
$query=mysql_query("SELECT * FROM cuser where email <> '$_SESSION[email]'") or die(mysql_error());
while($result=mysql_fetch_assoc($query))
{
$qr1=mysql_query("SELECT id,email FROM test_image where email='$result[email]'") or die(mysql_error());
$idd=$result['email'];
$row=mysql_fetch_assoc($qr1);
$ids=$row['email'];
echo "<a href=otherprofile.php?id=$idd><img src=image.php?id=$ids width=280 height=280/></a><br/>";
echo $result['username'];
echo"<br/><br/><br/>";


}
mysql_close();
}


function getdepartmentteam($l)
{
$qr2=mysql_query("SELECT branch FROM cuser where email= '$_SESSION[email]'") or die(mysql_error()) ;
$row=mysql_fetch_assoc($qr2);
$ids=$row['branch'];

$query=mysql_query("SELECT * FROM cuser where branch='$ids' and $l=1") or die(mysql_error());
while($result=mysql_fetch_assoc($query))
{
$qr1=mysql_query("SELECT id,email FROM test_image where email='$result[email]'") or die(mysql_error());
$idd=$result['email'];
$row=mysql_fetch_assoc($qr1);
$ids=$row['email'];
echo "<a href=/vit/otherprofile.php?id=$idd><img src=/vit/image.php?id=$ids width=280 height=280/></a><br/>";
echo $result['username'];
echo"<br/><br/><br/>";


}

mysql_close();
}


function getcomplaints()
{
$qr2=mysql_query("SELECT cseit,eee,ece,mech,name FROM cuser where email='$_SESSION[email]'") or die(mysql_error()) ;
$row=mysql_fetch_assoc($qr2);
$cseit1=$row['cseit'];
$eee1=$row['eee'];
$ece1=$row['ece'];
$mech1=$row['mech'];
$name =$row['name'];


$array=array(
"cseit"=>$cseit1,
"eee"=>$eee1,
"ece"=>$ece1,
"mech"=>$mech1);

$k=array();
$k=array_keys($array,1);

$m=count($k);



for($j=0;$j<$m;$j++)

{

$qr1=mysql_query("SELECT id,name,email,phoneno,title,content,time FROM jobs where department ='$k[$j]' and subdepartment='$designation' and branch='$branch1' and status='0'") or die(mysql_error());




while($row1=mysql_fetch_assoc($qr1))
{

$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href=/vit/otherprofile.php?id=$k>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
 
/*echo "<div id=\"complaint\">";*/

	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href=/vit/otherprofile.php?id=$idd>";
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
echo"<form action=/vit/complaints/addcomment.php?postid=$t method='post'> ";
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
 echo"<a href=/vit/otherprofile.php?id=$idd>";
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
 echo"<a href=/vit/otherprofile.php?id=$idd>";
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
 
 echo"<form action=/vit/complaints/repostresolved.php?postid=$t and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"REPOST?\">";
 echo"</form>";
echo"</div>";
}
elseif($row1['status']==0)
 {
 
 echo"<form action=/vit/complaints/resolved.php?postid=$t  method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"Resolved?\">";
 echo"</form>";
echo"</div>";
}




 echo "<div id=\"solution\">";
echo"Solution:";
$t=$row1['id'];
echo"<p>";
echo"<form action=/vit/complaints/addcomment.php?postid=$t method='post'> ";
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
 echo"<a href=/vit/otherprofile.php?id=$idd>";
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




function getjobs()
{
$s=0;

echo"<div id=\"review1\">";
echo"<form method='post'> ";
 echo"<input type=\"submit\"  name=\"unresolved\" value=\"View Closed\">";
 echo"</form>";
 echo"</div>";
 if(isset($_POST['unresolved']))
 {
 $s=1;
 }

$qr3=mysql_query("SELECT * FROM jobs where email='$_SESSION[email]' and status='$s'") or die(mysql_error());

while($row1=mysql_fetch_assoc($qr3))
{
$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href=/vit/otherprofile.php?id=$k>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
echo"<div id=\"complaint\">";



	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href=/vit/otherprofile.php?id=$idd>";
 echo"Job Name:-"; echo $row1['name'];
  echo"</a>";
  echo"</div>";
		 
		 echo "<div id=\"phone\">";
	echo"CTC Offered:- ";echo $row1['ctc'];
	echo "<br/><br/>";
	 echo"</div>";
	  echo "<div id=\"email\">";
	  
	echo"Date:-"; echo $row1['date'];
	 echo"</div>";
	echo "<br/><br/>";
		echo "<div id=\"title\">";
	echo"Venue:-"; echo $row1['venue'];
		echo"</div>";
	
	 echo "<div id=\"content\">";
	echo $row1['content'];
	 echo"</div>";
	
	echo "<div id=\"title\">";
	  echo"GPA:-"; echo $row1['college'];
	 echo"</div>";
	 echo "<div id=\"tile\">";
	  echo"Tenth:-"; echo $row1['tenth'];
	 echo"</div>";
	 
	 echo "<div id=\"tile\">";
	  echo"Twelvth:-"; echo $row1['twelth'];
	 echo"</div>";
	 
	  echo "<div id=\"time\">";
	echo $row1['timestamp'];
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";

   
    $t=$row1['ids'];
  echo"<div id=\"resolved\">";


 echo"<form action='/vit/jobs/students.php?postname=$row1[name]&uname=$row1[username]'  method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"APPLIED\">";
 echo"</form>";
echo"</div>";


  if($row1['status']==1)
 {
 
 echo"<form action=/vit/jobs/repostresolved.php?postid=$t and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"REPOST OFFER?\">";
 echo"</form>";
echo"</div>";
}
elseif($row1['status']==0)
 {
 
 echo"<form action=/vit/jobs/resolved.php?postid=$t  method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"CLOSE APPLICATIONS\" style='margin-left:310px'>";
 echo"</form>";
echo"</div>";
}
echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";

}


}

function getjobs1($j)
{
$m=1;

echo"<div id=\"review1\">";
echo"<form method='post'> ";
 echo"<input type=\"submit\"  name=\"unresolved\" value=\"View Closed\">";
 echo"</form>";
 echo"</div>";
 if(isset($_POST['unresolved']))
 {
 $m=0;
 }

$qr3=mysql_query("SELECT * FROM jobs where email='$_SESSION[email]'and $j='$m' and status='0'") or die(mysql_error());

while($row1=mysql_fetch_assoc($qr3))
{
$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href=/vit/otherprofile.php?id=$k>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
echo"<div id=\"complaint\">";



	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href=/vit/otherprofile.php?id=$idd>";
 echo"Job Name:-"; echo $row1['name'];
  echo"</a>";
  echo"</div>";
		 
		 echo "<div id=\"phone\">";
	echo"CTC Offered:- ";echo $row1['ctc'];
	echo "<br/><br/>";
	 echo"</div>";
	  echo "<div id=\"email\">";
	  
	echo"Date:-"; echo $row1['date'];
	 echo"</div>";
	echo "<br/><br/>";
		echo "<div id=\"title\">";
	echo"Venue:-"; echo $row1['venue'];
		echo"</div>";
	
	 echo "<div id=\"content\">";
	echo $row1['content'];
	 echo"</div>";
	
	echo "<div id=\"title\">";
	  echo"GPA:-"; echo $row1['college'];
	 echo"</div>";
	 echo "<div id=\"tile\">";
	  echo"Tenth:-"; echo $row1['tenth'];
	 echo"</div>";
	 
	 echo "<div id=\"tile\">";
	  echo"Twelvth:-"; echo $row1['twelth'];
	 echo"</div>";
	 
	  echo "<div id=\"time\">";
	echo $row1['timestamp'];
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";

 
    $t=$row1['ids'];
  echo"<div id=\"resolved\">";

 echo"<form action='/vit/jobs/students.php?postname=$row1[name]&uname=$row1[username]'  method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"APPLIED\">";
 echo"</form>";
echo"</div>";

  if($row1['status']==0 && $row1[$j]==0)
 {
 
 echo"<form action=/vit/jobs/repostresolved1.php?postid=$t&peid=$j and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"REPOST OFFER?\">";
 echo"</form>";
echo"</div>";
}
elseif($row1['status']==0 && $row1[$j]==1)
 {
 
 echo"<form action=/vit/jobs/resolved1.php?postid=$t&peid=$j method='post'> ";
 echo"<input type=\"submit\" name=\"resolved?\" value=\"CLOSE APPLICATIONS\" style='margin-left:310px' >";
 echo"</form>";
echo"</div>";
}
echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";

}


}


?>
