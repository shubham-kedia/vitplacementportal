<?php include("headersmall.php");
if(!isset($_SESSION['suser']))
echo "<script>window.location.href='./index.php'</script>";
//$s=$_SESSION['suser'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>


<!--
Sript for no back button
<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>-->

</head>
<!--<body onLoad='noBack();' onpageshow='if(event.persisted) noBack();' onUnload=''>  -->
<body> 
<h2 style="margin-left:590px; color:#666"><strong>
Edit Profile:</strong>
</h2>

<fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
<legend style="font:'Comic Sans MS', cursive; margin-left:290px"> <strong> Basic Description</strong></legend><br/>
<br/>
<table width="670" border="1" bordercolor="#000000" rules="all" style="margin-left:8px">
  <tr>
    <td colspan="2" rowspan="5" height="200px" width="200px"><img src="image.php?id=<?php echo $_SESSION['suser']?>" /></td>
    <td width="207">RegNo:</td>
    <td width="114"><?php 

 echo $s2['regno'];
 ?></td>
    </tr>
  <tr>
    <td>DOB :</td>
    <td><?php echo date('d/m/Y',strtotime($s2['dob'])); ?></td>
    </tr>
  <tr>
    <td>First name :</td>
    <td><?php 

 echo $s2['fname'];
 ?></td>
    </tr>
  <tr>
    <td>Last Name:</td>
    <td><?php 

 echo $s2['lname'];
 ?></td>
    </tr>
  <tr>
    <td>Mother's Name:</td>
    <td><?php 

 echo $s2['mother'];
 ?></td>
  </tr>
  <tr>
    <td>Father's Name:</td>
    <td><?php 

 echo $s2['father'];
 ?></td>
    <td>Alternate Email:</td>
    <td><?php 

 echo $s2['aemail'];
 ?></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><?php echo $s1['email'];?></td>
    <td>Alternate Mobile:</td>
    <td><?php 

 echo $s2['amobile'];
 ?></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><?php 

 echo $s2['mobile'];
 ?></td>
    <td>Landline:</td>
    <td><?php 

 echo $s2['landline'];
 ?></td>
  </tr>
  <tr>
    <td>Gender :&nbsp;&nbsp;</td>
    <td><?php 

 echo $s2['gender'];
 ?></td>
    <td>Nationality:</td>
    <td><?php 

 echo $s2['national'];
 ?></td>
  </tr>
</table>
</fieldset><br/><br/>
<fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
<legend style="font:'Comic Sans MS', cursive; margin-left:270px"> <strong>Educational Information</strong></legend><br/>
<br/>
<table width="670" border="1" bordercolor="#000000" rules="all" style="margin-left:8px">
  <tr>
    <td width="132">10th Start Year:</td>
    <td width="141"><?php 

 echo $s2['tenths'];
 ?></td>
    <td width="148">12th Start Year:</td>
    <td width="162"><?php 

 echo $s2['twelths'];
 ?></td>
  </tr>
  <tr>
    <td>10th End Year:</td>
    <td><?php 

 echo $s2['tenthe'];
 ?></td>
    <td>12th End Year:</td>
    <td><?php 

 echo $s2['twelthe'];
 ?></td>
  </tr>
  <tr>
    <td>10th %:</td>
    <td><?php 

 echo $s2['tenthm'];
 ?>&nbsp;</td>
    <td>12%:</td>
    <td><?php 

 echo $s2['twelthm'];
 ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>12th Institute:</td>
    <td><?php 

 echo $s2['school'];
 ?></td>
  </tr>
</table>
<br/>
</fieldset>
</fieldset><br/><br/>
<fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
<legend style="font:'Comic Sans MS', cursive; margin-left:288px"> <strong> Current Degree</strong></legend><br/>
<br/>
<table width="670" border="1" bordercolor="#000000" rules="all" style="margin-left:8px">
  <tr>
    <td width="179">Current Degree:</td>
    <td width="126"><?php 

 echo $s2['degree'];
 ?></td>
    <td width="137">Branch:</td>
    <td width="164"><?php 

 echo $s2['branch'];
 ?></td>
  </tr>
  <tr>
    <td>CGPA:</td>
    <td><?php 

 echo $s2['cgpa'];
 ?></td>
    <td>Academic Gap:</td>
    <td><?php 

 echo $s2['agap'];
 ?></td>
  </tr>
  <tr>
    <td colspan="">No. of arrears:        </td><td><?php 

 echo $s2['arrears'];
 ?></td><td>&nbsp;</td>
    <td>&nbsp;</td></tr>
  <tr>
    <td>Academic Category:</td>
    <td><?php 

 echo $s2['acat'];
 ?></td>
    <td>(Refer to PAT Notice)</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
<br /><br>
<fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
<legend style="font:'Comic Sans MS', cursive; margin-left:298px"> <strong> Reciept Details</strong></legend><br/>
<br/>
<table width="670" border="1" bordercolor="#000000" rules="all" style="margin-left:8px">
  <tr>
    <td width="158">Payment Receipt No.</td>
    <td width="162"><?php 

 echo $s2['rno'];
 ?></td>
    <td width="189">Payment Receipt Date:</td>
    <td width="155"><?php 

 echo date('d/m/Y',strtotime($s2['rdate']));
 ?>
     </td>
    </tr>
</table>
</fieldset>
<br/><br/></br>
<form>
<fieldset style="border:inset;border-width:20px; margin-right:290px;margin-left:270px">
<legend style="font:'Comic Sans MS', cursive; margin-left:310px"> <strong>Done All</strong></legend><br/>
<br/>
<input type="submit" value="Edit Profile" style="margin-left:290px" formaction="profileform.php">
<input type="submit" value="Home" formaction="hello.php" />

</fieldset>
</form>
</body>
</html>