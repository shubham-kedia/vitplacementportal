<?php 
	
function apply($b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)
{   
if($m==0)
//cseit
switch($j)
  {
	  case 'cseit':
	$qr1=(mysql_query("select * from jobs where tenth<='$f' and twelth<='$g' and arrears>='$h' and agap>='$i' and cseit='1' and status='0' and college<='$l'"));
	$i=1;
	if(mysql_num_rows($qr1)>0 && $m==0)
	while($row=mysql_fetch_assoc($qr1))
	{
		$ids=$row['username'];
		$ids1=$row['name'];
echo $i.".   Job Name:  <a href=applyjobs.php?id=$ids&id1=$ids1 class='sk1'>$row[name]</a> by Company:$row[username]  For Job Post:<a href=applyjobs.php?id=$ids&id1=$ids1 class='sk1' >$row[content]</a><br/><br/>";
$i++;
	}
	else if(mysql_num_rows($qr1)==0 && $m==0) echo "</br>No jobs For You until now</br></br>";

  break;
  
  //ece
  case 'ece':
  
	$qr1=(mysql_query("select * from jobs where tenth<='$f' and twelth<='$g' and arrears>='$h' and agap>='$i' and ece='1' and status='0' and college<='$l'"));
	$i=1;
	if(mysql_num_rows($qr1)>0 && $m==0)
	while($row=mysql_fetch_assoc($qr1))
	{
		$ids=$row['username'];
		$ids1=$row['name'];
echo $i.".   Job Name:  <a href=applyjobs.php?id=$ids&id1=$ids1>$row[name]</a> by Company:$row[username]  For Job Post:<a href=applyjobs.php?id=$ids&id1=$ids1>$row[content]</a><br/><br/>";
$i++;
	}
	else if(mysql_num_rows($qr1)==0 && $m==0) echo "</br>No jobs For You until now</br></br>";
	
  break;
  
  //eee
 case 'eee':
	$qr1=(mysql_query("select * from jobs where tenth<='$f' and twelth<='$g' and arrears>='$h' and agap>='$i' and eee='1' and status='0' and college<='$l'"));
	$i=1;
	if(mysql_num_rows($qr1)>0 && $m==0)
	while($row=mysql_fetch_assoc($qr1))
	{
		$ids=$row['username'];
		$ids1=$row['name'];
echo $i.".   Job Name:  <a href=applyjobs.php?id=$ids&id1=$ids1>$row[name]</a> by Company:$row[username]  For Job Post:<a href=applyjobs.php?id=$ids&id1=$ids1>$row[content]</a><br/><br/>";
$i++;
	}
	else if(mysql_num_rows($qr1)==0 && $m==0) echo "</br>No jobs For You until now</br></br>";
	
  break;
  
  //mech
 case 'mech':
	$qr1=(mysql_query("select * from jobs where tenth<='$f' and twelth<='$g' and arrears>='$h' and agap>='$i' and mech='1' and status='0' and college<='$l'"));
	$i=1;
	if(mysql_num_rows($qr1)>0 && $m==0)
	while($row=mysql_fetch_assoc($qr1))
	{
		$ids=$row['username'];
		$ids1=$row['name'];
echo $i.".   Job Name:  <a href=applyjobs.php?id=$ids&id1=$ids1>$row[name]</a> by Company:$row[username]  For Job Post:<a href=applyjobs.php?id=$ids&id1=$ids1>$row[content]</a><br/><br/>";
$i++;
	}
	else if(mysql_num_rows($qr1)==0 && $m==0) echo "</br>No jobs For You until now</br></br>"; 
  break;
  
  default:echo "No jobs"; break;
  }// end of switch
 else echo "<script> alert('No jobs For you.Already Placed');var k=window.confirm('Want to give some experience');if(k==1)window.location.href='shareexp.php?id=$b'; else window.location.href='hello.php';</script>";
  
}// end of function

/*function getjob($us,$us1)
{   $s2=mysql_fetch_array(mysql_query("select * from suser where username='$_SESSION[suser]'"));
	$str=$s2['fname']." ".$s2['lname'];
	$qr1="insert into $us values ('$s2[regno]','$str','0')";
	if(mysql_query($qr1))
	echo"<script>alert('Succesfully applied for Job');window.location.href='jobs.php';</script>";
    else echo"<script>alert('Error.Apply Failed');window.location.href='jobs.php';</script>";
}*/
function showcomments($a,$b)
{ 
	$qr = mysql_query("SELECT regno,comment,jobname FROM suser where company='$b'") or die(mysql_error());
	  $x=0;
while($row=mysql_fetch_assoc($qr))
{
echo"<ul class='commentlist'>";
	if($x%2==0)    
	{
	echo "<li class='comment_odd'>";
	}
  else
	{
	echo "<li class='comment_even'>";
	}
	echo "<div class='author'><img class='avatar' src='images/avatar.gif' width='32' height='32' alt='' /><span class='name'><a href='#'><b>$row[regno]</b></a></span> <span class='wrote'>wrote for Job Post: </span><span class='name'><a href='#'><b>$row[jobname]</b></div><div class='submitdate'><a href='#'>August 4, 2009 at 8:35 am</a></div><p>$row[comment]</p></li></ul>"; 
$x++;
} 
	}
?>