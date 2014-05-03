<?php

   require_once 'include/DB_Functions.php';
   
 $db = new DB_Functions();

  			
	
/*
			if(!(filter_var($em,FILTER_VALIDATE_EMAIL)))
	
	{

echo"<script>alert('Email is Not Valid.Please Give valid Email');window.location.href='http://localhost/vit/student/signup.php';</script>";		
	
	}
	
			else
	{*/

	$name = $_POST['name'];
     
   	$email = $_POST['email'];
        
	$password = $_POST['password'];
        

			if ($db->isUserExisted($email))
	{
echo"<script>alert('This User already exists!');
window.location.href='http://localhost/vit/pat/signup.php</script>";
	}
			else
	{

$user = $db->storeUser($name, $email, $password);



			
			if($user)
	{

echo"<script>alert('Thanks for Signinig up with Us');window.location.href='http://localhost/vit/pat/index.php';</script>";

	}	

else echo "<script>alert('mysql_error()');window.location.href='http://localhost/vit/pat/signup.php</script>";

//}

}
?>


