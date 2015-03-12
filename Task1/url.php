<?php

function validateUrl($url){

if(isset($url))
{
	
	if(empty(trim($url)))
	{
		echo "<div class='error'> Enter an URL! </div>";
			return false;
	}
		
	else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
			$websiteErr = "<div class='error'> Invalid URL! </div>"; 
			echo $websiteErr;
				return false;
	}
	
	else return true;
	
	

}
else return true;
}


?>