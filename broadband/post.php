<html>
<head>
<link href="/bsnl/broadband/css/b.css" rel="stylesheet" type="text/css" />
<link href="/bsnl/css/smooth.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("broadbandheader.php")
?>



<?php
$id=$_GET['id'];
if($id==1)
{
	echo "
	<form action='createcomplaintdb.php' method='post'>
<fieldset>
<legend><h2> CREATE COMPLAINT</h2> </legend>

Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='title' required><br/><br/>

Sub-Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='subdept' required><br/>

Content:<br />
  <textarea name='content' rows='15' cols='40' required>
  </textarea><br />

<input type='Submit' value='submit'>

</fieldset>
</form>";

}
?>
</body>
</html>