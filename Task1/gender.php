<?php

	function validateGender()
	{
			if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['gender'])){
<<<<<<< HEAD
				echo "<div class='error'> Select your gender! </div>";
=======
				echo "Select your gender!";
>>>>>>> origin/master
				return false;
			}
			else return true;
	}
	else return false;
	
	}
?>