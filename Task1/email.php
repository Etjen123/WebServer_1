<?php


function validateEmail($email)
{

	if(isset($email))
	{
		if(empty(trim($email)))
		{
<<<<<<< HEAD
			echo "<div class='error'> e-mail field must be filled! </div>";
=======
			echo "All fields must be filled!";
>>>>>>> origin/master
				return false;
		}
		
		else if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
<<<<<<< HEAD
			$emailErr = "<div class='error'> Invalid e-mail! </div>"; 
=======
			$emailErr = "Invalid Email</br>"; 
>>>>>>> origin/master
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