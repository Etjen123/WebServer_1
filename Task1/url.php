<?php

function validateUrl($url){

if(isset($url))
{
	
	if(empty(trim($url)))
	{
		echo "All fields must be filled!";
			return false;
	}
		
	else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
			$websiteErr = "Invalid URL</br>"; 
			echo $websiteErr;
				return false;
	}
	
	else return true;
	
	

}
else return true;
}


?>