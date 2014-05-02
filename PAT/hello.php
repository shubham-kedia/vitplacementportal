<?php 

include("headersmall.php");
		if(!isset($_SESSION['pat']))
{echo "<script> window.location.href='index.php';</script>";
	}
?>

<h1 style="margin-top:50px"><a ><||VIT Placement Portal||></a></h1>
<div id="sk">
<ul>
  <li><a href="index1.php" class="sk1">Home</a></li>
    <li><?php
					echo $s1['username']; ?>
    </li>
	
    <ul>
      <li><a href="jobs.php" class="sk1">Posted Jobs</a></li>
      <li><a href="viewcompanies.php" class="sk1">View Companies</a></li>
      <li><a href="sendmessage.php" class="sk1">Send Message</a></li>
      <li><a href="logout.php" class="sk1">Logout</a></li>
    </ul>
  </li>
</ul>
</div>