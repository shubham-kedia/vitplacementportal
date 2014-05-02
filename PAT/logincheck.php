<?php


 require_once 'include/DB_Functions.php';
   
 $db = new DB_Functions();

session_start();
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
			include('index.php');
			echo '<script language="javascript" type="text/javascript">alert("Enter Your Password");
					</script>' ;
			
		
} 
	else if(($_POST['password']!='')&&$_POST['email']=='')
{
		
		include('index.php');
		 echo '<script language="javascript" type="text/javascript">alert("Enter Your Email");
					</script>' ;
		
		
}




 else if(($_POST['password']=='')&&$_POST['email']=='')
{




	include('index.php');
		 echo '<script language="javascript" type="text/javascript">alert("Enter Your Email and Password");
					</script>' ;
	
	
}
  
else if($_POST['email']!='' && $_POST['password']!='')
{

		
			$user=$db->getUserByEmailAndPassword($email, $password);
if($user!=null)
{
$_SESSION['pat'] = $user['username'];
$_SESSION['email'] = $user['email'];
echo $user['username'];
header("Location:index1.php");}


else
{
echo '<script language="javascript" type="text/javascript">alert("Please enter a valid email and password");</script>' ;
header("Location:index.php");
}

}


}
?>