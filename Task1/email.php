<?php


function validateEmail($email)
{

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  	$emailErr = "Invalid Email"; 
  	echo $emailErr;
  	return false;
	}
else{
	echo"Correct";
	return true;
	}

}

?>