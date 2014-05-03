<?php
session_start();
include("connectdb.php");

$columns = array('broadband', 'landline', 'mobile', 'threeg'); 
$office = $_POST['dept']; 
$values=array();

foreach($columns as $column){

      if(in_array($column, $office)){
         $values[ $column ] = 1;
      } else {
         $values[ $column ] = 0;
      }
   }

$qr1= mysql_query("SELECT email FROM employee1 where email='$_SESSION[email]'") or die(mysql_error());

$i=mysql_num_rows($qr1);

if($i==0)
{

$sql= "insert into employee1(email,branch,username,officeno,phone,broadband,landline,mobile,threeg,mob,timing,designation,floor) values ('$_SESSION[email]','$_POST[branch]','$_SESSION[user]','$_POST[officeno]','$_POST[phone]',{$values['broadband']},{$values['landline']},{$values['mobile']},{$values['threeg']},'$_POST[mob]','$_POST[timing]','$_POST[designation]','$_POST[floor]')";
if(mysql_query($sql,$connection))
	{
	echo"<script>alert('DONE!');window.location.href='http://localhost/bsnl/upload.php';</script>";
    }
	else
	{ 
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/bsnl/signup.php</script>";
	}
	echo"hi";
	echo $_SESSION['email'];
	echo $_SESSION['user'];
	echo $_POST['branch'];
	
}


else
{
$sql1= "update employee1 SET email='$_SESSION[email]',branch='$_POST[branch]',username='$_SESSION[user]',officeno='$_POST[officeno]',phone='$_POST[phone]',broadband={$values['broadband']},landline={$values['landline']},mobile={$values['mobile']},threeg={$values['threeg']},mob='$_POST[mob]' ,timing='$_POST[timing]',designation= '$_POST[designation]',floor= '$_POST[floor]'    where email='$_SESSION[email]'";
	if(mysql_query($sql1,$connection))
	{
	echo"<script>alert('UPDATED');window.location.href='http://localhost/bsnl/upload.php';</script>";
    }
	else
	{ 
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/bsnl/signup.php</script>";
	}
	}





?>