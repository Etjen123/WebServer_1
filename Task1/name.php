<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
<<<<<<< HEAD
				echo "<div class='error'> Enter your full name! </div>";
=======
				echo "All fields must be filled!";
>>>>>>> origin/master
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
<<<<<<< HEAD
			$nameErr="<div class='error'> Please enter a valid name (no numbers or special characters allowed)! </div>";
=======
			$nameErr="Invalid Name</br>";
>>>>>>> origin/master
			echo $nameErr;
			return false;
		}
		else return true;
		
	
	}
	else return true;
}

?>