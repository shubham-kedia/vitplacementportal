<!DOCTYPE HTML>



<html>
<head>
<title>Tapestry by HTML5Templates.com</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head><body>
<div id="header-wrapper">
 <?php include("headersmall.php")?>
	
</div>
<div id="wrapper">

	<div id="page">
		<div class="5grid-layout">
			<div class="row">

				<div class="6u">
					<div class="mobileUI-main-content" id="content">
						<section>
							<div class="post">
								<h2>Welcome</h2>

								<p><?php

include $_SERVER['DOCUMENT_ROOT'] . 'vit/functions.php';
if(isset ($_SESSION['email']))
{
getPosts1();
}
else

{
header("Location:/vit/profilelogin.php");
}
?>







<br>
						<p class="button-style2"><a href="#">Read Full Article</a></p>
							</div>
						</section>
					</div>
				</div>
				<div class="3u" id="sidebar1">
					<section>
						<h2></h2>
						<ul class="style2">
							<li class="first">
							
							<li><a href="cset.php">
								<?php
getdepartment();
getcseitimage();
?>
</a>							</li>
							<li>
								<a href="eee.php">
<?php
getdepartment();
geteeeimage();
?>
</a>

							</li>
							<li>
								<a href="ece.php">
<?php
getdepartment();
geteceimage();
?>
</a>
							</li>
							<li>

							</li>
						</ul>
					</section>
				</div>
				<div class="3u">
					<div id="sidebar2">
						<section>
							<div class="sbox1">
								<h2>Feugiat Lorem</h2>
								<ul class="style1">
									<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
									<li><a href="#">Etiam rhoncus volutpat erat</a></li>
									<li><a href="#">Donec dictum metus in sapien</a></li>
									<li><a href="#"></a></li>
									<li><a href="#">Maecenas luctus lectus at sapien</a></li>
								</ul>
							</div>
						</section>
						<section>
							<div class="sbox2">
								<h2>Nulla luctus eleifend</h2>
								<ul class="style1">
									<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
									<li><a href="#">Donec dictum metus in sapien</a></li>
									<li><a href="#">Integer gravida nibh quis urna</a></li>
									<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
									<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="featured-area">
	<div class="5grid-layout">
		<div class="row divider">
			<div class="4u">
				<section>
					<div class="box-style"> <a href="mech.php">
<?php
getdepartment();
getcseitimage();
?>
						<h3>Etiam posuere augue</h3>
						<p>Donec nonummy magna quis risus. Quisque eleifend. </p>
						<p class="button-style2"><a href="#">More</a></p>
					</div>
				</section>
			</div>
			<div class="4u">
				<section>
					<div class="box-style"> 																<a href="ece.php">
<?php
getdepartment();
geteceimage();
?>
						
					</div>
				</section>
			</div>


			<div class="4u">
				<section>
					<div class="box-style"> 
					<div class="box-style"> 																<a href="eee.php">
<?php
getdepartment();
geteeeimage();
?>

					</div>
				</section>
			</div>
		</div>
	</div>

<div class="4u">
				<section>
					<div class="box-style"> 
					<div class="box-style"> 																<a href="mech.php">
<?php
getdepartment();
getmechimage();
?>

					</div>
				</section>
			</div>
		</div>
</div>
<div id="footer-wrapper">
	<div class="5grid-layout">
		<div class="row" id="footer-content">
			<div class="3u" id="box1">
				<section>
					<h2>Maecenas luctus lectus</h2>
					<div class="balloon">
						<blockquote>&ldquo;&nbsp;&nbsp;Donec leo, vivamus ullamcorper fermentum nibh in augue pulvinar ullamcorper metus praesent a lacus at urna congue ullamcorper  rutrum.&nbsp;&nbsp;&rdquo;<br>
							<br>
							<strong>&ndash;&nbsp;&nbsp;John Smith</strong></blockquote>
					</div>
					<div class="ballon-bgbtm">&nbsp;</div>
					<p></p>
				</section>
			</div>
			<div class="3u" id="box2">
				<section>
					<h2>Donec dictum metus</h2>
					<ul class="style6">
						<li class="first">
							<h3>Mauris vulputate dolor sit amet</h3>
							<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
						</li>
						<li>
							<h3>Fusce ultrices fringilla metus</h3>
							<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
						</li>
						<li>
							<h3>Donec dictum metus in sapien</h3>
							<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
						</li>
					</ul>
				</section>
			</div>
			<div class="3u" id="box3">
				<section>
					<h2>Nulla luctus eleifend</h2>
					<ul class="style1">
						<li class="first"><a href="#">Maecenas luctus lectus at sapien</a></li>
						<li><a href="#">Etiam rhoncus volutpat erat</a></li>
						<li><a href="#">Donec dictum metus in sapien</a></li>
						<li><a href="#">Nulla luctus eleifend purus</a></li>
						<li><a href="#">Maecenas luctus lectus at sapien</a></li>
						<li><a href="#">Etiam rhoncus volutpat erat</a></li>
						<li><a href="#">Donec dictum metus in sapien</a></li>
					</ul>
				</section>
			</div>
			<div class="3u" id="box4">
				<section>
					<h2>Tristique eleifend</h2>
					<p><strong>Aliquam erat volutpat. Pellentesque tristique ante ut risus. </strong></p>
					<p>&nbsp;</p>
					<p>Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. </p>
					<p>&nbsp;</p>
					<p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
				</section>
			</div>
		</div>
	</div>
</div>
<div id="copyright">
	<div class="5grid-layout">
		<div class="row">
			<div class="12u">
				<p>&copy; Your Site Name | Images: <a href="http://fotogrph.com/">Fotogrph</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>