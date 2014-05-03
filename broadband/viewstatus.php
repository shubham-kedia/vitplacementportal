

<html>
<body>



<?php

include("broadbandheader.php");
?>


<div>
<div id="declare">
CLICK RESOLVED BUTTON IF YOUR QUERY IS RESOLVED
</div>



<?php


include $_SERVER['DOCUMENT_ROOT'] . 'bsnl/functions.php';
$l='broadband';
getcomplaintscustomer($l);
?>

</div>

</body>
</html>