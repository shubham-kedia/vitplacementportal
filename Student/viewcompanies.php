<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
<title>View Company</title>
</head>

<body>
<h2 align="center" style="text-decoration:underline"><strong>Company Profile</strong></h2>
<?php include $_SERVER['DOCUMENT_ROOT'].'/vit/functionothers.php'?>
<?php 
include("headersmall1.php"); 
include("checksession1.php");

$q1=mysql_query("select name,email,phone,website,fields from cuser");
if($q1)
{$i=1;
while($row1=mysql_fetch_assoc($q1))
{
//echo "</br>&nbsp;&nbsp;&nbsp;$i.  Company name:  <a href='showcompany.php?id=$row[email]&id1=$s2[regno]'>".strtoupper($row['name'])."</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company Email:$row[email]</br> <br/>";
//$i++;

$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href='showcompany.php?id=$row1[email]&id1=$s2[regno]'>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
echo"<div id=\"complaint\">";



	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<a href='showcompany.php?id=$row1[email]&id1=$s2[regno]'>";
 echo" Name:-"; echo $row1['name'];
  echo"</a>";
  echo"</div>";
		 
	
	  echo "<div id=\"email\">";
	  
	echo"Email:-"; echo $row1['email'];
	 echo"</div>";
	echo "<br/><br/>";
		echo "<div id=\"title\">";
	echo"Website:-"; echo $row1['website'];
		echo"</div>";
	

	
	echo "<div id=\"title\">";
	  echo"Phone:-"; echo $row1['phone'];
	 echo"</div>";
	 echo "<div id=\"tile\">";
	  echo"fields:-"; echo $row1['fields'];
	 echo"</div>";
	 
	
	 
	  echo "<div id=\"time\">";
	echo"";
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";
 
 $t=$row1['email'];
    echo"<form action=/vit/jobs/repostresolved.php?postid=$t and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"Send Message\">";
 echo"</form>";
echo"</div>";
 echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";
   
  

}
}
else die(mysql_error());
?>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:340px"> <strong>Done All</strong></legend><br/>
<form>
<input type="submit" value="Home" formaction="hello.php" style="margin-left:350px"  class="button_example"/>
</form>
</fieldset>
</body>
</html>