<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send Message</title>
</head>

<body>
<?php 
include("headersmall.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$qr="insert into message(receiver,content) values ('$_POST[to]','$_POST[message]')";
	if(mysql_query($qr)or die (mysql_error()))
	{
		echo "<script>alert('Message send');window.location.href='hello.php'</script>";
		}
}
?>
<form action="sendmessage.php" method="post"> 
        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<h2>Type your Message:</h2><br />
        &nbsp; &nbsp;&nbsp; &nbsp;To:
        <input type="text" name="to" placeholder="Like cseit or mech or ece" /><br /><br />
        &nbsp; &nbsp;&nbsp; &nbsp;<p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Your Message:</p>
            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<textarea  name="message" cols='100%' rows='10' placeholder="Write Something here"></textarea>
          </p>
          <p>
          &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input name='submit' type='submit' id='submit' value='Submit'  style='margin-left:20px'/>
            &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   <input name='reset' type='reset' id='reset' tabindex='5' value='Reset Form' />
          </p>
        </form>
</body>
</html>