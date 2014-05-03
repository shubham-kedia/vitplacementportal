




<head>
<meta charset="utf-8">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/vit/headersmall.php';

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

<h1>ENTER JOB DETAILS</h1>
<form action="checkit.php" method="POST" name="employeeinfo">
	<ul>
        <li>
        	<label for="branch">Name</label>
            <input type="text" size="40" id="name"  name="name" />
        </li>
	
		<li>
        	<label for="name">CTC:</label>
            <input type="text" size="40" id="ctc"  name="ctc" />
        </li>
		
		
		<li>
        	<label for="name"> Date:</label>
            <input type="text" size="40" id="date"  name="date" />
        </li>
		<li>
        	<label for="name"> venue:</label>
            <input type="text" size="40" id="venue"  name="venue" />
        </li>
		
			<li>
        	<label for="name"> About:</label>
            <input type="text" size="40" id="content"  name="content" />
        </li>
		<li>
        	<label for="name"> Tenth:</label>
            <input type="text" size="40" id="tenth"  name="tenth" />
        </li>
		
		<li>
        	<label for="name"> Twelth:</label>
            <input type="text" size="40" id="twelth"  name="twelth" />
        </li>
		<li>
        	<label for="name"> College Gpa:</label>
            <input type="text" size="40" id="gpa"  name="gpa" />
        </li>
		
		
	<label for="name">Branches applicable</label>
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
