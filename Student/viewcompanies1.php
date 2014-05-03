<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
<title>View Company</title>
</head>

<body>
<h2 align="center" style="text-decoration:underline"><strong>Company Profile</strong></h2>
<?php 
include("headersmall1.php"); 
include("checksession.php");
$q1=mysql_query("select name,email from cuser");
if($q1)
{$i=1;
while($row=mysql_fetch_assoc($q1))
{
echo "</br>&nbsp;&nbsp;&nbsp;$i.  Company name:  <a href='showcompany.php?id=$row[email]&id1=$s2[regno]'>".strtoupper($row['name'])."</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company Email:$row[email]</br> <br/>";
$i++;
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