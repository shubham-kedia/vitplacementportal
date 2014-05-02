<html>
<head>
<title>Search Results
</title>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>


<h2 align="center" style="text-decoration:underline"><strong>Search Results</strong></h2>

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/vit/functionothers.php';
include("headersmall1.php");
include("checksession1.php"); 
		if(!isset($_SESSION['suser']))
{echo "<script> window.location.href='./index.php';</script>";
	}

			$query = mysql_query("SELECT * FROM jobs where $s2[branch]='1' and agap>='$s2[agap]' and arrears>='$s2[arrears]' and status='0'") or die(mysql_error());
			$flag=0;
			if($query)
			{
				$i=1;
	while($row1 = mysql_fetch_assoc($query))
	{
	if($_POST['t1']!="")
		if (strpos($row1['username'],$_POST['t1']) !== false) 
		{$flag=1;
          //echo "</br></br><p style='margin-left:350px'>".$i.".
		  //---Comapany:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[username]</a>
		  //---Job name:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[name]</a>
		  //---Job Post:<a href='applyjobs.php?id=$post[username]&id1=$post[name]'>$post[content]</a></p><br>";
	//$i++;
	$k=$row1['email'];
echo"<div id=\"dp1\">";
 echo"<a href='applyjobs.php?id=$row1[username]&id1=$row1[name]'>";
getpostsothers($k);
 echo"</a>";
 echo"</div>";
echo"<div id=\"complaint\">";



	
			echo "<br/><br/>";
			
		
	 
	 $idd=$row1['email'];
 echo "<div id=\"name\">";
 echo"<applyjobs.php?id=$row1[username]&id1=$row1[name]'>";
 echo" Company:-"; echo $row1['username'];
  echo"</a>";
  echo"</div>";
		 
	
	  echo "<div id=\"email\">";
	  
	echo"Email:-"; echo $row1['email'];
	 echo"</div>";
	echo "<br/><br/>";
		
	

	
	
	 echo "<div id=\"tile\">";
	  echo"JOB NAME:-"; echo $row1['name'];
	 echo"</div>";
	 
	echo "<div id=\"title\">";
	  echo"CTC:-"; echo $row1['ctc'];
	 echo"</div>";
	 
	 echo "<div id=\"title\">";
	echo"Content:-"; echo $row1['content'];
		echo"</div>";
		
	 echo "<div id=\"title\">";
	  echo"Date-"; echo $row1['date'];
	 echo"</div>";
	 
	  echo "<div id=\"title\">";
	  echo"Venue-"; echo $row1['venue'];
	 echo"</div>";
	 
	 
	 
	  echo "<div id=\"time\">";
	echo"";
	 echo"</div>";
	echo "</p></li>"; 	
 echo"</div>";
 
 $t=$row1['email'];
    echo"<form action=/vit/jobs/repostresolved.php?postid=$t and method='post'> ";
 echo"<input type=\"submit\" name=\"resolved\" value=\"APPLY\">";
 echo"</form>";
echo"</div>";
 echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";echo"<br>";
   echo"<br>";
   
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