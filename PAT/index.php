<!DOCTYPE html>
<html>
<head>
<?php 

if(isset($_SESSION['pat']))
{echo "<script> window.location.href='./index1.php';</script>";
	}
/*else if(isset($_SESSION['cuser']))
{echo "<script> window.location.href='./company/index1.php';</script>";
	}	*/
?>
	<meta charset=utf-8 />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>VIT Placements-PAT</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/demo-styles.css" />
    
	<link rel="stylesheet" type="text/css" media="screen" href="css/sequencejs-theme.sliding-horizontal-parallax.css" />
	<link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">
	
       <!-- css for login box start-->
   
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" /> 

<script type="text/javascript" src="scripts/jquery1.4.2.js"></script>   
<script type="text/javascript" src="scripts/jquery-ui-1.8.2.custom.min.js"></script>   
<script type="text/javascript" src="scripts/login.js"></script>   
    <!-- js for login box end--> 
    
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>   
	<script type="text/javascript">
	if (typeof jQuery == 'undefined'){
	    document.write(unescape("%3Cscript src=../scripts/jquery.js type='text/javascript'%3E%3C/script%3E"));
	}
	</script>
	<script type="text/javascript" src="scripts/sequence.jquery-min.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			var options = {
				autoPlay: false,
				autoPlayDirection: 1,
				nextButton: ".next",
				prevButton: ".prev",
				prependNextButton: false,
				prependPrevButton: false,
				pauseIcon: false,
				animateStartingFrameIn: false, 
				delayDuringOutInTransitions: false
			};

			var slideShow = $("#slideshow").sequence(options).data("sequence");
			
			$(".prev, .next").show();
		})
	</script>
</head>

<body>
	<!--  login box starts-->
        <div id="header_wrapper">
            <div id="header1">
                <h1> <a class="no-underline" href="index.html">vitplacements.com</a></h1>
                <a href="#" class="login_btn"><span>Login</span><div class="triangle"></div></a>
                <div id="login_box">
                    <div id="tab"><a href="..." class="login_btn"><span>Login</span><div class="triangle"></div></a></div>
                    <div id="login_box_content"></div>
                    <div id="login_box_content">
                        <form id="login_form" action="logincheck.php" method="post">
                            <h2>Welcome PAT Admin</h2>
                            <input type="text" placeholder="Email" name="email" autocomplete="on" />
                            <input type="password" placeholder="Password" name="password" />
                            <input type="submit" name="submit" value="Login" />
                        </form>
                    </div>
                </div>
            </div>
</div>
  <!--  login box ends-->
	<!--code for the demo overlay and details, not needed for the demo to work-->
	    <div id="demo-details" class="bottom">
	        <div id="demo-links" class="float-left">
	        	<ul>
	            	<li><h1><a class="no-underline" href="http://www.vitplacements.com/"><img class="logo-small" src="images/vitlogo.png" height="20" width="40" />VIT</a>: Placements</h1></li>
                    <li><h1><b><a class="no-underline" href="">About Us</a></b></h1></li>
                    <li><h1><b><a class="no-underline" href="">Blogs</a></b></h1></li>
                    
	            </ul>
	        </div>  
            
	        <ul id="share">
	           
	            <li><h1><b><a class="no-underline" href="">Contact Us</a></b></h1></li>
                <li><h1><b><a class="no-underline" href="signup.php">Register</a></b></h1></li>
	            <li><p><span>Developed by </span><a href="http://www.vitplacements/about" ></a>Papa</p></li>
	        </ul>
	    </div>
	<!--//code for the demo overlay and details, not needed for the demo to work--> 
       
	<div id="header">
     

   
		
        <div id="slideshow">
			<img class="prev" src="images/bt-prev.png" alt="Previous" />
			<img class="next" src="images/bt-next.png" alt="Next" />
			<ul>
				<li>
					<div class="info animate-in">
						<h2>Best World Reknown Comapanies</h2>
						<p>Get Placed With Best Companies of the World</p>
					</div>
					<img class="sky animate-in" src="images/bg-clouds.png" alt="Blue Sky" />
					<img class="balloon animate-in" src="images/balloon.png" alt="Balloon" />
				</li>
				<li>
					<div class="info">
						<h2>Selection Processl</h2>
						<p>Best Selection Process in Campus through this Portal</p>
					</div>
					<img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
					<img class="aeroplane" src="images/aeroplane.png" alt="Aeroplane" />
				</li>
				<li>
					<div class="info">
						<h2>Less Efforts</h2>
						<p>Every Information In just one Click</p>
					</div>
					<img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
					<img class="kite" src="images/kite.png" alt="Kite" />
				</li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="content">
			<img src="images/vitlogo.png" alt="Sequence" height="220" width="600" />
			<p>Vit Placements portal is an new idea to auomate whole placements process in a better and good way so as to ease students as well as well as to the company and company.It will reduce the pain f work carried out by each part in placements process. I hope you all like it.</p>
			<ul id="product-links">
				<li><a href="#">Register Today &gt;</a></li>
				<li><a href="#">Mobile App Coming Soon&gt;</a></li>
			</ul>
		</div>
		<div id="aside">
			<h3>VITP portal Features</h3>
			<ul id="features">
				<li>Unique selection Process</li>
				<li>Supports all comapany requirement</li>
				<li>Helps to select the comapny in which you are eligible</li>
				<li>More User Friendly</li>
				<li>Guide you to each selection Process</li>
				<li>Provides feedback and experiences of other selected Candidates</li>			</ul>

			
		</div>
		<div class="clear"></div>
		<div id="footer">
			<small><a href="http://www.vitplacements.com/" >VitPlacements.com</a>, the one and only VIT placement portal and its dependencies are &copy; 2013 unless otherwise specified.</small>
			
		</div>
	</div>
	<script type="text/javascript">
	  window.___gcfg = {lang: 'en-GB'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	</body>
</html>

