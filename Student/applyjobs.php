<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIT Placements</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/my.css" />
<?php 

include("headersmall1.php");
include("functions.php");
include("checksession.php");
$us=$_GET['id'];
$us1=$_GET['id1'];


$p=mysql_fetch_assoc(mysql_query("select * from jobs where name='$us1' and username='$us'"));
 ?>
<table>
<tr><td><h2 style="margin-left:60px">VIT Placements    </h2></td><td> <h2 style="margin-left:700px">User:<?php echo $_SESSION['suser']; ?></h2></td></tr></table>
</head>
 
<body>

<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:260px">
<legend style="font:'Comic Sans MS', cursive; margin-left:310px"> <strong> Basic Description</strong></legend><br/>
<br/>
<table width="670" border="1" bordercolor="#000000" rules="all" style="margin-left:8px">
  <tr>
    <td width="134">Job Name:</td>
    <td width="168"><?php echo $p['name'] ?></td>
    <td width="60">&nbsp;</td>
    <td width="113">Job Post
    <td width="190"><?php echo $p['content'] ?></td>
    
  </tr>
  <tr>
    <td>Branches:</td>
    <td><?php echo $p['name'] ?> 
     </td>
    <td>&nbsp;</td>
    <td>CTC:</td>
    <td><?php echo "Rs".$p['ctc'] ?></td>
  </tr>
  <tr>
    <td>10th Marks</td>
    <td><?php echo $p['tenth']."% & above" ?></td>
    <td>&nbsp;</td>
    <td>12th Marks</td>
    <td><?php echo $p['twelth']."% & above" ?></td>
  </tr>
  <tr>
    <td>Min CGPA:</td>
    <td><?php echo $p['college']." cgpa & above" ?></td>
    <td>&nbsp;</td>
    <td>Date:</td>
    <td><?php echo date('d/m/Y',strtotime($p['date']));?></td>
  </tr>
  <tr>
    <td>Venue:</td>
    <td><?php echo $p['venue'] ?></td>
    <td>&nbsp;</td>
    <td>Time:</td>
    <td><?php echo $p['time'] ?></td>
  </tr>
    <tr>
    <td>Max Arrears:</td>
    <td><?php echo $p['arrears'] ?></td>
    <td>&nbsp;</td>
    <td>Max Agap:</td>
    <td><?php echo $p['agap'] ?></td>
  </tr>
</table>
</fieldset>

<br />
<form>
<fieldset style="border:inset;border-width:20px; margin-right:235px;margin-left:235px">
<legend style="font:'Comic Sans MS', cursive; margin-left:360px"> <strong>Done All</strong></legend><br/>
<a  style="text-decoration:none; margin-left:310px" href="apply.php?id=<?php echo $us ;?>&id1=<?php echo $us1;?>" class="button_example">Apply</a>
<input type="submit" value="Back" formaction="jobs.php" class="button_example" />
<input type="submit" value="Home" formaction="hello.php"  class="button_example"/>
</fieldset>
</form>
</body>
</html>