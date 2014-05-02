<html>
<head>

</head>
<body> 
<?php 
include("headersmall1.php"); 
include("checksession.php");
?>
<div class="cleaner divider"></div>
 <div id="slider_left1">
</br><a href='hello.php'  class="learnmore"><img src="images/back_btn.png"/></a>
</br></br></br></br></div>
      <?php 
	  
	  $t=$_GET['id'];
	 $t=stripcslashes($t);
	  $t=stripslashes($t);
	  $t=str_replace("'","",$t);
	  $t=str_replace("/","",$t);
	  $t=str_replace("\/","",$t);

		 ?>	
         <p style="text-align:justify;
text-justify:inter-word;color:grey">
<h3>
Student Reg no: <?php echo $s2["regno"]?></br></br>
Candidate Name:<?php echo $s2["fname"];echo " ".$s2["lname"] ?></br> </br>
Company name:<?php echo $s2["company"]?>
</h3></br> </p>
			<form action="addexpr.php" method="post"> 
        <p>
            &nbsp; &nbsp;<textarea  name="comment" cols='100%' rows='10'><?php echo "$s2[comment]"; ?></textarea>
          </p>
          <p>
            <input name='submit' type='submit' id='submit' value='Submit'  style='margin-left:20px'/>
            &nbsp;
            <input name='reset' type='reset' id='reset' tabindex='5' value='Reset Form' />
          </p>
        </form>
	  
	 
</body>  
</html>