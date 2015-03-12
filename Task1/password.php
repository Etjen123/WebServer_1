<?php

function validatePassword($pass1, $pass2){
	
	if(isset($pass1) && isset($pass2))
	{
		if(empty(trim($pass1)) || empty(trim($pass2)))
		{
<<<<<<< HEAD
		echo "<div class='error'> Enter a password! </div>";
=======
		echo "Both fields have to be filled!";
>>>>>>> origin/master
		return false;
		
		}
	
		else
		{		
			if($pass1==$pass2)
<<<<<<< HEAD
				return true;
			else
			{
				echo  "<div class='error'> Passwords don't match! </div>";
=======
			{
					if (!preg_match_all('$\S*(?=\S{8,})\S*$', $pass1))
						{
							
							echo "Password must have at least 8 letters";
							return false;
						}
					else 
						return true;
		
			}
				
			else
			{
				echo  "The passwords don't match!";
>>>>>>> origin/master
					return false;
			}
		}
	}
	
<<<<<<< HEAD
	else return true;
=======
	else return false;
>>>>>>> origin/master
	
}



?>