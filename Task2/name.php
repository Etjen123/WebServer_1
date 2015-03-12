<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
<<<<<<< HEAD
				echo "<div class='required'> *First Name OR Last Name missing! </div>";
=======
				echo "All fields must be filled!";
>>>>>>> origin/master
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
<<<<<<< HEAD
			$nameErr="<div id='required'> Name Field Error: Invalid Name OR Surname</div>";
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