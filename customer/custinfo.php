




<head>
<meta charset="utf-8">
<?php include $_SERVER['DOCUMENT_ROOT'] . 'vit/headersmall.php';

?>
<link rel="stylesheet" href="/vit/style.css" />
<link rel="stylesheet" href="/vit/css/a.css" />
<link rel="stylesheet" href="/vit/css/smooth.css" />


<script type="text/javascript" charset="utf-8">
      $(function(){
        $("input:checkbox, input:radio, input:file, select").uniform();
      });
    </script>
</head>

<body id = "me">

<article>

<h1>Please Fill up Your Online Profile</h1>
<form action="checkit.php" method="POST" name="employeeinfo">
	<ul>
        <li>
        	<label for="branch">Name</label>
            <input type="text" size="40" id="name"  name="name" />
        </li>
	
		<li>
        	<label for="name">Phone No:</label>
            <input type="text" size="40" id="phoneno"  name="phone" />
        </li>
		
		
		<li>
        	<label for="name"> Website:</label>
            <input type="text" size="40" id="website"  name="website" />
        </li>
		<li>
        	<label for="name"> Fields:</label>
            <input type="text" size="40" id="fields"  name="fields" />
        </li>
		
		
	<label for="name">Departments of Interest</label>
		 <li>
		<br/>
			<label><input type="checkbox" name="dept[]" value="cseit" /> CSE/IT</label><br/>
			<label><input type="checkbox" name="dept[]" value="eee" /> EEE</label><br/>
			<label><input type="checkbox" name="dept[]" value="ece"/> ECE</label><br/>
			<label><input type="checkbox" name="dept[]" value="mech" /> MECH</label>
			 
   </li>
     
       
	</ul>
    <p>
        <button type="submit" class="action" name="button">Done</button>
        <button type="reset" class="right">Reset</button>
    </p>
</form>
</article>
<footer>
<p>Designed by PAT</a></p>
</footer>



