<html>
<head>
<title>Search Results
</title>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2 align="center" style="text-decoration:underline"><strong>Search Results</strong></h2>
<?php 
include("headersmall1.php");
include("checksession.php"); 
		if(!isset($_SESSION['suser']))
{echo "<script> window.location.href='./index.php';</script>";
	}

			$query = mysql_query("SELECT * FROM jobs where $s2[branch]='1' and agap>='$s2[agap]' and arrears>='$s2[arrears]' and status='1'") or die(mysql_error());
			$flag=0;
			if($query)
			{
				$i=1;
	while($post = mysql_fetch_assoc($query))
	{
	if($_POST['t1']!="")
		if (strpos($post['username'],$_POST['t1']) !== false) 
		{$flag=1;
          echo "</br></br><p style='margin-left:350px'>".$i.".
		  ---Comapany:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[username]</a>
		  ---Job name:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[name]</a>
		  ---Job Post:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[content]</a></p><br>";
	$i++;
}
else $flag==0;
	}
	if($flag==0)
	echo "</br></br><h1>No results found or Query is Empty or You Have not met the Eligibility Criteria or Job is Closed</h1>";
	}

?>
<br />
<br />
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
  <legend style="font:'Comic Sans MS', cursive; margin-left:340px"> <strong>Done All</strong></legend>
  <br/>
  <form>
    <input type="submit" value="Home" formaction="hello.php" style="margin-left:350px" />
  </form>
</fieldset>
</body>
</html>