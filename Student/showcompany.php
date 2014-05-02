<?php 
include("headersmall1.php");
include("functions.php");
include("checksession.php");
$id=$_GET['id'];
$id1=$_GET['id1'];
$c2=mysql_fetch_array(mysql_query("select * from cuser where email='$id'"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<link rel="stylesheet" type="text/css" href="css/comment.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
</head>
<!--<body onLoad='noBack();' onpageshow='if(event.persisted) noBack();' onUnload=''>  -->
<body>
<h2 style="margin-left:590px; color:#666"><strong> View Profile:</strong> </h2>
<fieldset style="border:inset;border-width:20px; margin-right:300px;margin-left:260px">
  <legend style="font:'Comic Sans MS', cursive; margin-left:260px"> <strong>Company Profile-<?php echo strtoupper($c2['name']);?></strong></legend>
  <br/>
  <br/>
 <table width="785" border="1" bordercolor="#000000" rules="all" style="margin-left:8px" class="mid">
  <tr>
    <td width="200" height="200" rowspan="3"><img src="../image.php?id=<?php echo $c2['email']?>" width="200px" height="200px" /></td>
    <td width="121" height="56">Company:</td>
    <td width="200"><?php 

 echo $c2['name'];
 ?></td>
   <!-- <td width="148">Address:</td>
    <td width="161"><?php echo $c2['addr']; ?></td>-->
  </tr>
   <tr>
    <td height="71">Email:</td>
    <td><?php echo $c2['email'];?></td>
   <!-- <td>Alternate Email:</td>
    <td><?php 

 echo $c2['aemail'];
 ?></td>-->
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><?php 

 echo $c2['phone'];
 ?></td>
    <!-- <td>Landline:</td>
    <td><?php 

 echo $c2['landline'];
 ?></td>-->
    </tr>
</table>
</fieldset>
<br/>
<br/>
<h2 align="center"> Experiences: </h2>
<div id="comments">
  <?php 

showcomments($id1,$c2['username']);
?>
</div>
<form>
  <fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
    <legend style="font:'Comic Sans MS', cursive; margin-left:310px"> <strong>Done All</strong></legend>
    <br/>
    <br/>
    <input type="submit" value="Back" formaction="viewcompanies.php" style="margin-left:285px"  class="button_example"/>
    <input type="submit" value="Home" formaction="hello.php"  class="button_example"/>
  </fieldset>
</form>
</body>
</html>