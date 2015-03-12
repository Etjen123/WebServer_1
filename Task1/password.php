<?php

function validatePassword($pass1, $pass2){
	
	if(isset($pass1) && isset($pass2))
	{
		if(empty(trim($pass1)) || empty(trim($pass2)))
		{
		echo "<div class='error'> Enter a password! </div>";
		return false;
		
		}
	
		else
		{		
			if($pass1==$pass2)
				return true;
			else
			{
				echo  "<div class='error'> Passwords don't match! </div>";
					return false;
			}
		}
	}
	
	else return true;
	
}



?>