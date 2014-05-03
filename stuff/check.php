



<?php include("headersmall.php")?>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/a.css" />

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
        	<label for="name">Office No:</label>
            <input type="text" size="40" id="officeno"  name="officeno" />
        </li>
        <li>
        	<label for="floor">Floor</label>
            <input type="text" size="40" id="Floor"  name="floor"/>
        </li>
		
		<li>
        	<label for="branch">Branch</label>
            <input type="text" size="40" id="branch"  name="branch" />
        </li>
		
		<li>
        	<label for="name">Office Phone No:</label>
            <input type="text" size="40" id="phoneno"  name="phone" />
        </li>
		
		<li>
        	<label for="name">Office Mobile No:</label>
            <input type="text" size="40" id="mobno"  name="mob" />
        </li>
		
		
		<li>
        	<label for="office">Office Timings:</label>
            <input type="text" size="40" id="timing"  name="timing" />
        </li>
		
		
        <li>
            <label for="car">Designation: if other then Type below</label>
            <select id="car">
                <option>JTO</option>
                <option>Engineer</option>
                <option>Customer Care</option>
                <option>Branch Manager</option>
                <option>Other&hellip;</option>
            </select>
			<br>
			
			<li>
        	<label for="name">Designation(if not in list):</label>
            <input type="text" size="40" id="phonen" name ="designation" />
        </li>
		
		 <li>
			<label><input type="checkbox" name="dept[]" value="broadband" /> BSNL Broadband</label>
			<label><input type="checkbox" name="dept[]" value="landline" /> BSNL Landline</label>
			<label><input type="checkbox" name="dept[]" value="mobile"/> BSNL Mobile</label>
			<label><input type="checkbox" name="dept[]" value="threeg" /> BSNL 3G</label>
			 
   </li>
     
       
	</ul>
    <p>
        <button type="submit" class="action" name="button">Done</button>
        <button type="reset" class="right">Reset</button>
    </p>
</form>
</article>
<footer>
<p>Designed by Pankaj Yadav</a></p>
</footer>



