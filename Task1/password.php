<?php

function validatePassword($pass1, $pass2){
	
	if(isset($pass1) && isset($pass2))
	{
		if(empty(trim($pass1)) || empty(trim($pass2)))
		{
		echo "Both fields have to be filled!";
		return false;
		
		}
	
		else
		{		
			if($pass1==$pass2)
				return true;
			else
			{
				echo  "The passwords don't match!";
					return false;
			}
		}
	}
	
	else return true;
	
}



?>