<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
<link href="css/a.css" rel="stylesheet" type="text/css" />
<link href="css/smooth.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
 include $_SERVER['DOCUMENT_ROOT'].'/vit/functionothers.php';
include("headersmall1.php");
include("checksession1.php");
include("functions.php");


?>
<table>
<tr><td><h2>VIT Placements    </h2></td><td> <h2 style="margin-left:700px">User:<?php echo $_SESSION['suser']; ?></h2></td></tr></table>
<?php 
apply($s2['regno'],$s2['fname'],$s2['lname'],$s1['email'],$s2['tenthm'],$s2['twelthm'],$s2['arrears'],$s2['agap'],$s2['branch'],$s2['dob'],$s2['cgpa'],$s2['placed']);
?>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:340px"> <strong>Done All</strong></legend><br/>
<form>
<input type="submit" value="Home" formaction="hello.php" style="margin-left:350px" class="button_example" />
</form>
</fieldset>

</body>
</html>
