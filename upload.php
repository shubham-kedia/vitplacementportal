<html>
<head>
<link href="css/a.css" rel="stylesheet" type="text/css" />
<link href="css/smooth.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="headercontainer">
<?php include("headersmall.php")?>
</div >

<div id="upload">

<div id="label">


Please Upload A Profile Picture
</div>

<br/> <br/> <br/>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file" >Filename:</label>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />

<input type="file"  name="file" id="file" /> 
<br /><br />
<input type="submit" name="submit" value="Submit" />
</form>
</div>

</body>
</html>


