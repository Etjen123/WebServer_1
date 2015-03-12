<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
				echo "<div class='error'> Enter your full name! </div>";
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
			$nameErr="<div class='error'> Please enter a valid name (no numbers or special characters allowed)! </div>";
			echo $nameErr;
			return false;
		}
		else return true;
		
	
	}
	else return true;
}

?>