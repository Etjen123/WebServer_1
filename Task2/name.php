<?php
function validateName($name){

	if (isset($name))
	{
		if(empty(trim($name)))
		{
				echo "<div class='required'> *First Name OR Last Name missing! </div>";
				return false;
		}
		
		else if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes(trim($name))) )
		{
			$nameErr="<div id='required'> Name Field Error: Invalid Name OR Surname</div>";
			echo $nameErr;
			return false;
		}
		else return true;
		
	
	}
	else return true;
}

?>