<html>
<head>
<link rel="stylesheet" href="/vit/css/a.css" />
<link rel="stylesheet" href="/vit/css/smooth.css" />
<link rel="stylesheet" href="../student/css/my.css" />
</head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/vit/headersmall.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/vit/connectdb.php';


$job=$_GET['postname'];
$cname=$_GET['uname'];

$query = "SELECT regno,name,company FROM applied where jobname='$job' and company='$cname' and selected<>'1'";
$result = mysql_query($query) or die(mysql_error());
$i=1;
echo "<table border='1' align='center'>
<tr>
<td><h2>S.No</h2>
</td>
<td><h2>Name</h2>
</td>
<td><h2>Reg. No</h2>
</td>
<td><h2>Select</h2>
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
<td><a href='select.php?reg=$row[regno]&comp=$row[company]' class='button_example' style='color:white'>Select</a>
</td>
</tr>";

$i++;
}
echo "</table>";

?>

<body>
<br>
<form action="save.php?postname=<?php echo $job?>&uname=<?php echo $cname?>" method="post" style="margin-left:600px">
<table><tr><td>
<input type="submit" align="middle" class="button_example"  value="Save" /></td><td>
<input type="submit" align="middle" class="button_example" value="Home" formaction="../profile.php"/></td>
<td>
<input type="button" align="middle" class="button_example" value="Back" onClick="javascript:window.history.back()"/></td></tr>
</table>
</form>
</body>
</html>