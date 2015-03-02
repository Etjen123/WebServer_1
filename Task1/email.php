<?php


function validateEmail($email)
{

	if(isset($email))
	{
		if(empty(trim($email)))
		{
			echo "All fields must be filled!";
				return false;
		}
		
		else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
			$emailErr = "Invalid Email</br>"; 
			echo $emailErr;
				return false;
			}
		else{
			echo"Correct";
			return true;
			}
	}
	
	else return true;
}

?>