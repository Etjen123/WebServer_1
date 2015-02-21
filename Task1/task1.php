<html>

<body>

<?php

function validate($info)
	{
		print $info[1];
	}

$firstname = $$_GET('firstname');
$lastname = $_GET('lastname');

$f_pass = $_GET('f_pass');
$s_pass = $_GET('s_pass');

$day = $_GET('day');
$month = $_GET('month');
$year = $_GET('year');

$gender = $_GET('gender');

$java = $_GET('java');
$c = $_GET('c');
$objectivec = $_GET('objectivec');

$email = $_GET('email');
$url = $_GET('url');

$info = get_defined_vars();

	
	
	validate($info);
{
		
}

?>

</body>
</html>