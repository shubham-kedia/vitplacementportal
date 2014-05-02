<?php

   require_once 'include/DB_Functions.php';
   
 $db = new DB_Functions();

  			
	
/*
			if(!(filter_var($em,FILTER_VALIDATE_EMAIL)))
	
	{

echo"<script>alert('Email is Not Valid.Please Give valid Email');window.location.href='http://localhost/bsnl/signup.php';</script>";		
	
	}
	
			else
	{*/

	$name = $_POST['name'];
     
   	$email = $_POST['email'];
        
	$password = $_POST['password'];
        $website=$_POST['website'];

			if ($db->isUserExisted($email))
	{
echo"<script>alert('This User already exists!');
window.location.href='http://localhost/bsnl/signup.php</script>";
	}
			else
	{

$user = $db->storeUser($name, $email, $password,$website);
			
			if($user)
	{

echo"<script>alert('Thanks for Signinig up with Us');window.location.href='http://localhost/bsnl/login.php';</script>";

	}	

else echo "<script>alert('mysql_error()');window.location.href='http://localhost/bsnl/signup.php</script>";

//}

}

 echo"<script>alert('Please fill all details');window.location.href='http://localhost/bsnl/signup.php';</script>";	

?>


