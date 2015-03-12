<?php

function validatePassword($pass1, $pass2){
	
	if(isset($pass1) && isset($pass2))
	{
		if(empty(trim($pass1)) || empty(trim($pass2)))
		{
		echo "<div class='required'>*Password is required</div>";
		return false;
		
		}
	
		else
		{		
			if($pass1==$pass2)
			{
					if (!preg_match_all('$\S*(?=\S{8,})\S*$', $pass1))
						{
							
							echo "<div class='required'>*Password must have at least 8 characters</div>";
							return false;
						}
					else 
						return true;
		
			}
				
			else
			{
				echo  "<div class='required'>*Passwords don't match</div>";
					return false;
			}
		}
	}
	
	else return false;
	
}



?>