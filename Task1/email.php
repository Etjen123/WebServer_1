<?php


function validateEmail($email)
{

	if(isset($email))
	{
		if(empty(trim($email)))
		{
			echo "<div class='error'> e-mail field must be filled! </div>";
				return false;
		}
		
		else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
			$emailErr = "<div class='error'> Invalid e-mail! </div>"; 
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