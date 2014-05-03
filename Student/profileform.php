<?php 
include("headersmall.php");
if(!isset($_SESSION['suser']))
echo "<script>window.location.href='./index.php'</script>";
//$s=$_SESSION['suser'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
 <link href="css/main.css" rel="stylesheet" type="text/css" />
   <link href="css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css"  />
   
 <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
    <script src="includes/ice/ice.js" type="text/javascript"></script>
    <script src="js/jquery.min.js"></script>
        <script src="js/jquery.Jcrop.min.js"></script>
        <script src="js/script.js"></script>
</head>
<!--<body onLoad='noBack();' onpageshow='if(event.persisted) noBack();' onUnload=''>  -->
<body> 
<h2 style="margin-left:540px; color:#666"><strong>
Edit Profile:</strong>
</h2>

<div class="demo">
            <div class="bheader">
              <h2>-- Update Your Details--</h2></div>
            <div class="bbody">

                <!-- upload form -->
                <form id="upload_form" enctype="multipart/form-data" method="post" action="profileup.php" onsubmit="return checkForm()">
                    <!-- hidden crop params -->
                    <input type="hidden" id="x1" name="x1" />
                    <input type="hidden" id="y1" name="y1" />
                    <input type="hidden" id="x2" name="x2" />
                    <input type="hidden" id="y2" name="y2" />

                    <h2>Step1: Please select image file</h2>
                    <div><input type="file" name="image_file" id="image_file" onchange="fileSelectHandler()"  required="required"/></div>

                    <div class="error"></div>

                    <div class="step2">
                        <h2>Step2: Please select a crop region</h2>
                        <img id="preview" />

                        <div class="info">
                            <label>File size</label> <input type="text" id="filesize" name="filesize" />
                            <label>Type</label> <input type="text" id="filetype" name="filetype" />
                            <label>Image dimension</label> <input type="text" id="filedim" name="filedim" />
                            <label>W</label> <input type="text" id="w" name="w" />
                            <label>H</label> <input type="text" id="h" name="h" />
                        </div>

                    </div>
              
            </div>
           </div>
           			<!--Image form -->
 <!-- XXXXXXXXXXXXXX---------------XXXXXXXXX--------------XXXXXXXXXXX-->  
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:310px"> <strong> Basic Description</strong></legend><br/>
<br/>
<table width="687" border="0">
  <tr>
    <td>RegNo:</td>
    <td><input type="text" name="regno" value="<?php echo $s2['regno']; ?>" required="required" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="121">First name :</td>
    <td width="200"><input type="text" name="fname" value="<?php 

 echo $s2['fname'];
 ?>" required="required"  /></td>
    <td width="35">&nbsp;</td>
    <td width="148">Last Name:</td>
    <td width="161"><input type="text" name="lname" value="<?php 
 echo $s2['lname'];
 ?>" required="required" /></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>DOB :</td>
    <td><input class="inputDate" id="inputDate" value="<?php echo date('Y/m/d'); ?>" name="dob" />
					<label id="closeOnSelect">
					  <br />
					  <input type="checkbox" /> 
		  Close on selection</label>
				</p></td>
  </tr>
  <tr>
    <td>Father's Name:</td>
    <td><input type="text" name="father" value="<?php echo $s2['father']; ?>" required="required" /></td>
    <td>&nbsp;</td>
    <td>Mother's Name:</td>
    <td><input type="text" name="mother" value="<?php echo $s2['mother']; ?>" required="required" /></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" value="<?php echo $s1['email'];?>" required="required" disabled="disabled" /></td>
    <td>&nbsp;</td>
    <td>Alternate Email:</td>
    <td><input type="number" name="aemail" value="<?php echo $s2['aemail']; ?>" required="required" /></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td><input type="number" name="mobile" value="<?php echo $s2['mobile']; ?>" required="required" maxlength="10"/></td>
    <td>&nbsp;</td>
    <td>Alternate Mobile:</td>
    <td><input type="number" name="amobile" value="<?php echo $s2['amobile']; ?>" required="required" maxlength="10"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Landline:</td>
    <td><input type="number" name="landline" value="<?php echo $s2['landline']; ?>" required="required" /></td>
    </tr>
  <tr>
    <td>Gender :&nbsp;&nbsp;</td>
    <td><select name="gender" style="width:150px;">
      <option value="null">.........Select...........</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select></td>
    <td>&nbsp;</td>
    <td>Nationality:</td>
    <td><select name="national" style="width:150px;">
      <option value="null">........Select...........</option>
      <option value="Indian">Indian</option>
      <option value="Indian-NRI">Indian-NRI</option>
      <option value="Indian-PIO/OCI">Indian-PIO/OCI</option>
      <option value="Foriegn">Foriegn</option>
      <option value="Others">Others</option>
    </select></td>
  </tr>
</table>
</fieldset><br/><br/>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:290px"> <strong> Educational Information</strong></legend><br/>
<table width="693" border="0">
  <tr>
    <td width="132">10th Start Year:</td>
    <td width="141"><select name="tenths" style="width:150px;">
      <option value="null">.........Select...........</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
    </select></td>
    <td width="88">&nbsp;</td>
    <td width="148">12th Start Year:</td>
    <td width="162"><select name="twelths" style="width:150px;">
      <option value="null">.........Select...........</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
    </select></td>
  </tr>
  <tr>
    <td>10th End Year:</td>
    <td><select name="tenthe" style="width:150px;">
      <option value="null">.........Select...........</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
    </select></td>
    <td>&nbsp;</td>
    <td>12th End Year:</td>
    <td><select name="twelthe" style="width:150px;">
      <option value="null">.........Select...........</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
    </select></td>
  </tr>
  <tr>
    <td>10th %:</td>
    <td><input type="number" name="tenthm" value="<?php echo $s2['tenthm']; ?>" />&nbsp;</td>
    <td>&nbsp;</td>
    <td>12%:</td>
    <td><input type="number" name="twelthm" value="<?php echo $s2['twelthm']; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="number" name="twelthm2" hidden="hidden"/></td>
    <td>&nbsp;</td>
    <td>12th Institute:</td>
    <td><input type="text" name="school" value="<?php echo $s2['school']; ?>" /></td>
  </tr>
</table>
<br/>
</fieldset>
</fieldset><br/><br/>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:315px"> <strong> Current Degree</strong></legend><br/>
<table width="707" border="0">
  <tr>
    <td width="152">Current Degree:</td>
    <td width="158"><input type="text" name="degree" value="<?php echo $s2['degree']; ?>" /></td>
    <td width="53">&nbsp;</td>
    <td width="146">Branch:</td>
    <td width="176"><select name="branch" style="width:150px;" >
      <option value="null">.........Select...........</option>
      <option value="cseit">cse/it</option>
      <option value="ece">ece</option>
      <option value="mech">mech</option>
      <option value="eee">eee</option>
      
      </select></td>
  </tr>
  <tr>
    <td>CGPA:</td>
    <td><input type="text" name="cgpa" value="<?php echo $s2['cgpa']; ?>" /></td>
    <td>&nbsp;</td>
    <td>Academic Gap:</td>
    <td><select name="agap" style="width:150px;" >
      <option value="null">.........Select...........</option>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="5">No. of History of arrears (should have   cleared all the papers in the first attempt in pursuing degree).   Students who had supplementary and cleared will not be considered as   first attempt cleared :
        <select name="arrears" style="width:150px;" >
        <option value="null">.........Select...........</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="99">More than 10</option>
      </select></td>
    </tr>
  <tr>
    <td>Academic Category:</td>
    <td><select name="acat" style="width:150px;" >
      <option value="null">.........Select...........</option>
     
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select></td>
    <td colspan="2">(Refer to PAT Notice)</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
<br /><br>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:325px"> <strong> Recipt Details</strong></legend><br/>
<table width="708" border="0">
  <tr>
    <td width="158">Payment Receipt No.</td>
    <td width="162"><input type="number" name="rno" maxlength="10" value="<?php echo $s2['rno']; ?>" /></td>
    <td width="22">&nbsp;</td>
    <td width="189">Payment Receipt Date:</td>
    <td width="155"><input class="inputDate1" id="inputDate1" value="<?php if($s2['rdate']!=NULL) echo $s2['rdate'];else echo date('Y/m/d'); ?>" name="rdate" />
      <label id="closeOnSelect"> <br />
      </label><label id="closeOnSelect">
      <input type="checkbox" />
      Close on selection</label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</fieldset>
<br/><br/></br>
<fieldset style="border:inset;border-width:20px; margin-right:260px;margin-left:200px">
<legend style="font:'Comic Sans MS', cursive; margin-left:340px"> <strong>Submit All</strong></legend><br/>
<input type="submit" value="Submit" style="margin-left:325px">
<input type="submit" value="Home" formaction="hello.php" />

</fieldset>
</form>
</body>
</html>