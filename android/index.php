<?php



include $_SERVER['DOCUMENT_ROOT'].'/bsnl/android/function/androidfunction.php';




if(isset($_POST['tag']) && $_POST['tag']!='')
{
$tag=$_POST['tag'];

$response=array("tag"=>$tag,"success"=>0,"error"=0);


if($tag=='login')
{
$name=$_POST['name'];
$email=$_POST['email'];


$user=getuser($name,$email);

if($user!=false)
{
$response["success"]=1;
$response["user"]["name"]=$user['name'];
$response["user"]["email"]=$user['email'];
echo json_encode($response);


}else{


$response["error"]=1;
$response["error_msg"]="Incorrect combo";
echo json_encode($response);

}

elseif($tag='register'){
 $name = $_POST['name'];
       
 $email = $_POST['email'];

$exist=isuserexisted($email);

if($exist)
{
$response["error"]=2;
$response["error_msg"]="user already exists";
echo json_encode($response);

}else{
$user=storeuser($name,$email);


if($user)
{
$response["success"] = 1;
  
$response["user"]["name"] = $user["name"];
              
$response["user"]["email"] = $user["email"];
 echo json_encode($response);
}

else{
$response["error"] = 1;
      
$response["error_msg"] = "Error occured in Registartion";
                
echo json_encode($response);
}
}
}else{echo"Invalid Request";}

}else{echo"ACCESS DENIED";}

?>