<?php

function validateUrl($url){

if(isset($url))
{
	
	if(empty(trim($url)))
	{
<<<<<<< HEAD
		echo "<div class='error'> Enter an URL! </div>";
=======
		echo "All fields must be filled!";
>>>>>>> origin/master
			return false;
	}
		
	else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
<<<<<<< HEAD
			$websiteErr = "<div class='error'> Invalid URL! </div>"; 
=======
			$websiteErr = "Invalid URL</br>"; 
>>>>>>> origin/master
			echo $websiteErr;
				return false;
	}
	
	else return true;
	
	

}
else return true;
}


?>