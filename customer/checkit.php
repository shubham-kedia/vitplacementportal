<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'vit/connectdb.php';


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
$qr1= mysql_query("SELECT email FROM cuser where email='$_SESSION[email]'") or die(mysql_error());
$i=mysql_num_rows($qr1);

if($i==0)

{
$sql= "insert into cuser(email,name,username,phone,website,fields,cseit,eee,ece,mech) values ('$_SESSION[email]','$_POST[name]','$_SESSION[user]','$_POST[phone]','$_POST[website]','$_POST[fields]',{$values['cseit']},{$values['eee']},{$values['ece']},{$values['mech']})";


if(mysql_query($sql,$connection))
	{	
	echo"<script>alert('DONE!');window.location.href='http://localhost/vit/upload.php';</script>";
    }
	else
	{ echo"hi";
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/androidhub/signup.php</script>";
	}
	}
	else{
	$sql1= "update cuser SET email='$_SESSION[email]',name='$_POST[name]',username='$_SESSION[user]',phone='$_POST[phone]',website='$_POST[website]',fields='$_POST[fields]',cseit={$values['cseit']},eee={$values['eee']},ece={$values['ece']},mech={$values['mech']}' where email='$_SESSION[email]'";
	if(mysql_query($sql1,$connection))
	{
	echo"<script>alert('UPDATED');window.location.href='http://localhost/vit/upload.php';</script>";
    }
	else
	{ 
	echo "<script>alert('mysql_error()');window.location.href='http://localhost/androidhub/signup.php</script>";
	}
	}
	

	echo $_SESSION['email'];
	echo $_SESSION['user'];

	
	





?>