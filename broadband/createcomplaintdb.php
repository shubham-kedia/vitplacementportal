


<?php
include("broadbandheader.php");
include("connectdb.php");


$subdept=$_POST['subdept'];
$subdept=mysql_real_escape_string($subdept);
$post1=$_POST['content'];
$post1=mysql_real_escape_string($post1);


if($_SESSION['type']='employee')
{
$query=mysql_query("SELECT mob,branch FROM employee1 where email='$_SESSION[email]'")or die(mysql_error());
$post = mysql_fetch_assoc($query);
$phoneno =$post['mob'];
$branch=$post['branch'];

$sql="insert into complaint(name,email,phoneno,department,title,content,subdepartment,branch) values ('$_SESSION[user]','$_SESSION[email]','$phoneno','broadband','$_POST[title]','$post1','$subdept','$branch')"; 


if(mysql_query($sql,$connection))
{
	 echo "<script>alert('SUCCESS!!');window.location.href='http://localhost/bsnl/broadband/broadband.php'</script>";
}
	else {echo "<script>alert('FAILED!!');window.location.href='http://localhost/bsnl/broadband/filecomplaint.php'</script>";}
}


else if($_SESSION['type']='customer')
{

$query=mysql_query("SELECT mob,branch FROM customer where email='$_SESSION[email]'")or die(mysql_error());
$post = mysql_fetch_assoc($query);
$phoneno =$post['mob'];
$branch=$post['branch'];

$sql="insert into complaint(name,email,phoneno,department,title,content,subdepartment,branch) values ('$_SESSION[user]','$_SESSION[email]','$phoneno','broadband','$_POST[title]','$post1','$subdept','$branch')"; 


if(mysql_query($sql,$connection))
{
	 echo "<script>alert('SUCCESS!!');window.location.href='http://localhost/bsnl/broadband/broadband.php'</script>";
}
	else {echo "<script>alert('FAILED!!');window.location.href='http://localhost/bsnl/broadband/filecomplaint.php'</script>";}
}
?>



