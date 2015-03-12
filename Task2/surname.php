<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
				echo "<div class='required'> *Last name is Required! </div>";
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
			$nameErr="<div id='required'> Last Name Field Error: Invalid Name</div>";
			echo $nameErr;
			return false;
		}
		else return true;
		
	
	}
	else return true;
}

?>