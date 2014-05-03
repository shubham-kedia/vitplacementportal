<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/vit/connectdb.php';


$columns = array('cseit', 'eee', 'ece', 'mech'); 
$office = $_POST['dept']; 
$values=array();

foreach($columns as $column){

      if(in_array($column, $office)){
         $values[ $column ] = 1;
      } else {
         $values[ $column ] = 0;
      }
   }
echo $values['cseit'];
$qr1= mysql_query("SELECT name FROM jobs where name='$_POST[name]'") or die(mysql_error());
$i=mysql_num_rows($qr1);

if($i==0)
/*
$sql="insert into complaint(name,email,phoneno,department,title,content,subdepartment,branch) values ('$_SESSION[user]','$_SESSION[email]','$phoneno','broadband','$_POST[title]','$post1','$subdept','$branch')"; */

{
$sql= "insert into jobs(name,email,username,content,ctc,date,venue,tenth,twelth,college,cseit,eee,ece,mech) values ('$_POST[name]','$_SESSION[email]','$_SESSION[user]','$_POST[content]','$_POST[ctc]','$_POST[date]','$_POST[venue]','$_POST[tenth]','$_POST[twelth]','$_POST[gpa]',{$values['cseit']},{$values['eee']},{$values['ece']},{$values['mech']})";


if(mysql_query($sql,$connection))
	{	
	echo"<script>alert('DONE!');window.location.href='http://localhost/vit/jobs/viewjobs.php';</script>";
    }
	else
	{ echo"hi";
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/androidhub/signup.php</script>";
	}
	}
	else{
	$sql1= "update jobs SET email='$_SESSION[email]',username='$_SESSION[user]',content='$_POST[content]',ctc='$_POST[ctc]',date='$_POST[date]',venue='$_POST[venue]',tenth='$_POST[tenth]',twelth='$_POST[twelth]',college='$_POST[gpa]',cseit={$values['cseit']},eee={$values['eee']},ece={$values['ece']},mech={$values['mech']}' where name='$_POST[name]'";
	if(mysql_query($sql1,$connection))
	{
	echo"<script>alert('UPDATED');window.location.href='http://localhost/vit/jobs/viewjobs.php';</script>";
    }
	else
	{ echo"hwewwww";
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/vit/profile.php</script>";
	}
	}
	

	echo $_SESSION['email'];
	echo $_SESSION['user'];

	
	





?>