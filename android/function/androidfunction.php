<?php

include $_SERVER['DOCUMENT_ROOT'].'/bsnl/connectdb.php';





function store($name,$email)
{
$result= mysql_query("INSERT INTO check(name,email) values('$name','$email')");

if($result)
{
 $result = mysql_query("SELECT * FROM check WHERE email = '$email'");
}

else
{
return false;
}
}









function getuser($name,$email)

{
$result= mysql_query("SELECT * FROM check where email='$email'")or die(mysql_error());

$roll=$result['email'];

if($email=$roll)
{
return $result;
}
else
{
return false;
}
?>


 

function isUserExisted($email)
 {
        
$result = mysql_query("SELECT email from users WHERE email = '$email'");
        $no_of_rows = mysql_num_rows($result);
      
  if ($no_of_rows > 0)
 {
            // user existed 
           
		 return true;

} 

else {
   // user not existed
          
           return false;
  
}
   

 }