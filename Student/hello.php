<?php 

include("headersmall.php");
		if(!isset($_SESSION['suser']))
{echo "<script> window.location.href='index.php';</script>";
	}
			if($s2['regno']==NULL&&$s2['dob']==NULL&&$s2['degree']==NULL&&$s2['gender']==NULL&&$s2['agap']==NULL&&$s2['acat']==NULL&&$s2['rdate']==NULL&&$s2['rno']==NULL)
			echo"<script>alert('Please fill up your Details before Continuing');window.location.href='profileform.php';</script>";	
			

?>


<div id="search">

<h1 style="margin-top:150px"><a href="#" style="font-family:Georgia, 'Times New Roman', Times, serif"><||VIT Placement Portal||></a></h1>
<form id="f1" action="search.php" method="POST">
  <input type="text" name="t1" size="40" placeholder="search for jobs" style="margin-top:50px" />
  <input type="submit" value="Search" />
</form>
</div>

<div id="sk">
<div id="bar" class="smooth">
<ul>
  <li><a href="viewprofile.php" class="sk1">
    <?php
					echo $s1['name']; ?></a></li>
      <li><a href="profileform.php" class="sk1">Edit Profile</a></li>
      <li><a href="jobs.php" class="sk1">Apply</a></li>
      <li><a href="jobsapplied.php" class="sk1">Applied</a></li>
      <li><a href="viewcompanies.php" class="sk1">Companies</a></li>
      <li><a href="seemessage.php" class="sk1">Messages</a></li>
  
</ul>
</div>
</div>
<img src="images/vitlogo.jpg" />