<?php

include("headersmall.php");
/*-------xxxx------------Image Upload Logic--------xxxx--------------*/
$sImage = uploadImageFile();
$fp=fopen($sImage,'r') or die("file not open");
		  $d=fread($fp,filesize($sImage));
		   $d = addslashes($d);
		   fclose($fp);
		   unlink($sImage);
		  $sq="update suser set pic='$d' where username='$_SESSION[suser]'";
/*-------xxxx------------Image Upload Logic--------xxxx--------------*/
$sql="insert into suser values ('$_SESSION[suser]','$_POST[fname]','$_POST[lname]','$_POST[father]','$_POST[mother]','$_POST[aemail]','$_POST[mobile]','$_POST[amobile]','$_POST[landline]','$_POST[national]','$_POST[tenths]','$_POST[tenthe]','$_POST[tenthm]','$_POST[twelths]','$_POST[twelthe]','$_POST[twelthm]','$_POST[school]','$_POST[degree]','$_POST[agap]','$_POST[arrears]','$_POST[branch]','$_POST[regno]','$_POST[dob]','$_POST[cgpa]','$_POST[gender]','$_POST[acat]','$_POST[rno]','$_POST[rdate]',NULL,NULL,'0',NULL,NULL)"; 
if(!$n2)
{

if(mysql_query($sql)&&mysql_query($sq))
{
	echo"<script>alert('Profile Submitted succesfully');window.location.href='./viewprofile.php'</script>";
	}
	else echo mysql_error();
}
else 
{
	mysql_query("delete from suser where username='$_SESSION[suser]'");
	
	if(mysql_query($sql)&&mysql_query($sq) or die(mysql_error()))
	
	echo"<script>alert('Profile Updated succesfully');window.location.href='./hello.php'</script>";
	else
	echo"<script>alert('Profile Updation FAILED!!!');window.location.href='./index.php'</script>";
	}
mysql_close();
/*
-------------XXXXXXXXXXXXXXX-------------------XXXXXXXXXXXXXXXXXXX-----------
// Image Upload Logic
-------------XXXXXXXXXXXXXXX-------------------XXXXXXXXXXXXXXXXXXX-----------
*/

function uploadImageFile() { // Note: GD library is required for this function

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $iWidth = $iHeight = 200; // desired image result dimensions
        $iJpgQuality = 90;

        if ($_FILES) {

            // if no errors and size less than 250kb
            if (! $_FILES['image_file']['error'] && $_FILES['image_file']['size'] < 250 * 1024) {
                if (is_uploaded_file($_FILES['image_file']['tmp_name'])) {

                    // new unique filename
                    $sTempFileName = 'cache/' . md5(time().rand());

                    // move uploaded file into cache folder
                    move_uploaded_file($_FILES['image_file']['tmp_name'], $sTempFileName);

                    // change file permission to 644
                    @chmod($sTempFileName, 0644);

                    if (file_exists($sTempFileName) && filesize($sTempFileName) > 0) {
                        $aSize = getimagesize($sTempFileName); // try to obtain image info
                        if (!$aSize) {
                            @unlink($sTempFileName);
                            return;
                        }

                        // check for image type
                        switch($aSize[2]) {
                            case IMAGETYPE_JPEG:
                                $sExt = '.jpg';

                                // create a new image from file 
                                $vImg = @imagecreatefromjpeg($sTempFileName);
                                break;
                            /*case IMAGETYPE_GIF:
                                $sExt = '.gif';

                                // create a new image from file 
                                $vImg = @imagecreatefromgif($sTempFileName);
                                break;*/
                            case IMAGETYPE_PNG:
                                $sExt = '.png';

                                // create a new image from file 
                                $vImg = @imagecreatefrompng($sTempFileName);
                                break;
                            default:
                                @unlink($sTempFileName);
                                return;
                        }

                        // create a new true color image
                        $vDstImg = @imagecreatetruecolor( $iWidth, $iHeight );

                        // copy and resize part of an image with resampling
                        imagecopyresampled($vDstImg, $vImg, 0, 0, (int)$_POST['x1'], (int)$_POST['y1'], $iWidth, $iHeight, (int)$_POST['w'], (int)$_POST['h']);

                        // define a result image filename
                        $sResultFileName = $sTempFileName . $sExt;

                        // output image to file
                        imagejpeg($vDstImg, $sResultFileName, $iJpgQuality);
                        @unlink($sTempFileName);

                        return $sResultFileName;
                    }
                }
            }
        }
    }
}

?>
