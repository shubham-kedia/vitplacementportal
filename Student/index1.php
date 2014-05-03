<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vitplacement</title>
<?php 
include("headersmall.php");

if(isset($_SESSION['suser']))
{echo "<script> window.location.href='hello.php';</script>";
	}


else if(isset($_SESSION['cuser']))
{echo "<script> window.location.href='./company/hello.php';</script>";
	}
	//else {echo "<script> window.location.href='index.php';</script>";}

?>
</head>
</html>