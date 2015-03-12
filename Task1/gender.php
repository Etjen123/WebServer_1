<?php

	function validateGender()
	{
			if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['gender'])){
				echo "<div class='error'> Select your gender! </div>";
				return false;
			}
			else return true;
	}
	else return false;
	
	}
?>