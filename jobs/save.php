
<?php include $_SERVER['DOCUMENT_ROOT'] . '/vit/connectdb.php';	
$job=$_GET['postname'];
$cname=$_GET['uname'];

$query = "SELECT regno,name FROM applied where jobname='$job' and company='$cname'";
$result = mysql_query($query) or die(mysql_error());
$tsv = array();
$html = array();

$tsv[0]="Reg_No";
$tsv[1]="Name";
$sv = array();
$sv[] = implode(",", $tsv);
while($row = mysql_fetch_array($result, MYSQL_NUM))
{
$sv[] = implode(",", $row);
$html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
}

$sv = implode("\r\n", $sv);

$html = "<table>" . implode("\r\n", $html) . "</table>";
$fileName = $cname.'_'.$job.'(Applied_List).csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");

echo $sv;?>