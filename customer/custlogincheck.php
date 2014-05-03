<?php
session_start();

 require_once $_SERVER['DOCUMENT_ROOT'] . 'vit/include/DB_Functions.php';

 $db = new DB_Functions();


if(isset($_POST['submit']))
{
	        	$email=$_POST['email'];
			$password=$_POST['password'];

			$email= stripslashes($email);
			$password = stripslashes($password);

			$email = mysql_real_escape_string($email);
			$password = mysql_real_escape_string($password);
	 



if(($_POST['email']!='')&&$_POST['password']=='')
{
			include('login.php');
			echo '<script language="javascript" type="text/javascript">alert("Enter Your Password");
					</script>' ;
			//include('loginerror.php');
			//error("Please check your password!");
		
} 
	else if(($_POST['password']!='')&&$_POST['email']=='')
{
		
		include('login.php');
		 echo '<script language="javascript" type="text/javascript">alert("Enter Your Email");
					</script>' ;
		
		
}




 else if(($_POST['password']=='')&&$_POST['email']=='')
{




	include('login.php');
		 echo '<script language="javascript" type="text/javascript">alert("Enter Your Email and Password");
					</script>' ;
	
	
}
  
else if($_POST['email']!='' && $_POST['password']!='')
{

		
			$user=$db->getUserByEmailAndPassword($email, $password);
if($user!=null)
{
$_SESSION['user'] = $user['name'];
$_SESSION['email'] = $user['email'];


$_SESSION['type']='customer';
echo $name;
echo $email1;


header("Location:custinfo.php");}


else
{
echo '<script language="javascript" type="text/javascript">alert("Please enter a valid email and password");</script>' ;
header("Location:login.php");
}

}


}
?>