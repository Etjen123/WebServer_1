<?php

function validatePassword($pass1, $pass2){
	
	if(isset($pass1) && isset($pass2))
	{
		if(empty(trim($pass1)) || empty(trim($pass2)))
		{
<<<<<<< HEAD
		echo "<div class='required'>*Password is required</div>";
=======
		echo "Both fields have to be filled!";
>>>>>>> origin/master
		return false;
		
		}
	
		else
		{		
			if($pass1==$pass2)
			{
					if (!preg_match_all('$\S*(?=\S{8,})\S*$', $pass1))
						{
							
<<<<<<< HEAD
							echo "<div class='required'>*Password must have at least 8 characters</div>";
=======
							echo "Password must have at least 8 letters";
>>>>>>> origin/master
							return false;
						}
					else 
						return true;
		
			}
				
			else
			{
<<<<<<< HEAD
				echo  "<div class='required'>*Passwords don't match</div>";
=======
				echo  "The passwords don't match!";
>>>>>>> origin/master
					return false;
			}
		}
	}
	
	else return false;
	
}



?>