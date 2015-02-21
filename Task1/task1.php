<html>
<head>

</head>
<body>


<?php

include "validate.php";

$user["firstname"] = $_GET['firstname'];
$user["lastname"]= $_GET['lastname'];

$user["f_pass"] = $_GET['f_pass'];
$user["s_pass"] = $_GET['s_pass'];

$user["day"] = $_GET['day'];
$user["month"] = $_GET['month'];
$user["year"] = $_GET['year'];

$user["gender"] = $_GET['gender'];

$java = $_GET['java'];
$c = $_GET['c'];
$objectivec = $_GET['objectivec'];

$user["email"] = $_GET['email'];
$user["url"] = $_GET['url'];
	
validate($user);


?>

</body>
</html>