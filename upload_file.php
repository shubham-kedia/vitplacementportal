<?php
session_start();

$allowedExts = array("gif", "jpeg", "jpg", "png","JPG","PNG");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/PNG"))
&& ($_FILES["file"]["size"] < 900000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	echo $_SESSION['email'];
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		  $fp=fopen($_FILES["file"]["tmp_name"],'r') or die("file not open");
		  $d=fread($fp,filesize($_FILES["file"]["tmp_name"]));
		   $d = addslashes($d);
		   fclose($fp);
		 


 include("connectdb.php");
		 


 $qr1= mysql_query("SELECT id FROM test_image where email='$_SESSION[email]' ") or die(mysql_error());
		  $row=mysql_fetch_assoc($qr1);
$ids=$row['id'];
echo "id of the image:".$ids;
if(!is_numeric($ids))
{
		  $sql="insert into test_image(email,name,image) values ('$_SESSION[email]','$_SESSION[user]','$d')";
		  if(mysql_query($sql,$connection))
{
		  echo "<script>alert('Photo Uploaded Successfully');window.location.href='http://localhost/vit/profile.php'</script>";








}
		  else echo "<script>alert('Photo Upload Failed');window.location.href='http://localhost/vit/upload.php'</script>";
    

 /* move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "images/" . $_FILES["file"]["name"];*/


}
else {
	$sql="update test_image set image='$d' where email='$_SESSION[email]'";
				 if(mysql_query($sql,$connection))
		  echo "<script>alert('Photo Uploaded Successfully');window.location.href='http://localhost/vit/profilelogin.php'</script>";
		  else echo "<script>alert('Photo Upload Failed');window.location.href='http://localhost/vit/upload.php'</script>"; 	
}
      }
    }
  }
else
  {
  echo "<script>alert('Invalid File');window.location.href='http://localhost/vit/upload.php'</script>"; 
  }
?>