<?php


function validateEmail($email)
{

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  	$emailErr = "Invalid Email</br>"; 
  	echo $emailErr;
  	return false;
	}
else{
	echo"Correct";
	return true;
	}

}

?>