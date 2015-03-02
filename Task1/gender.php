<?php

	function validateGender()
	{
			if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['gender'])){
				echo "Select your gender!";
				return false;
			}
			else return true;
	}
	else return false;
	
	}
?>