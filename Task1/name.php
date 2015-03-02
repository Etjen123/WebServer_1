<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
				echo "All fields must be filled!";
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
			$nameErr="Invalid Name</br>";
			echo $nameErr;
			return false;
		}
		else return true;
		
	
	}
	else return true;
}

?>