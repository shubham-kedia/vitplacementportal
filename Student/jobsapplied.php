<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobs Appliedt</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
</head>
<?php include("headersmall.php"); ?>
<body>
<h1 align="center">Applied_List(<?php echo $_SESSION['suser'] ?>)</h1>
<?php 

$query = "SELECT * FROM applied where regno='$s2[regno]'";
$result = mysql_query($query) or die(mysql_error());
$i=1;
echo "<table border='1' align='center' width='860px'>
<tr>
<td><b>S.No</b>
</td>
<td><b>Name</b>
</td>
<td><b>Reg. No</b>
</td>
<td><b>Job Post</b>
</td>
<td><b>Company</b>
</td>
</tr>";
while($row = mysql_fetch_array($result))
{
echo "
<tr>
<td>$i
</td>
<td>$row[name]
</td>
<td>$row[regno]
</td>
<td>$row[jobname]
</td>
<td><a href='' class='sk1' >$row[company]</a>
</td>
</tr>";

$i++;
}
echo "</table>";

?>

<br />
<br />
<fieldset style="border:inset;border-width:20px; margin-right:235px;margin-left:235px">
<legend style="font:'Comic Sans MS', cursive; margin-left:360px"> <strong>Done All</strong></legend><br/>

<a href="hello.php" class="button_example" style="text-decoration:none; margin-left:370px">Home</a>
</fieldset>
</body>
</html>