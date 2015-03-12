<?php

function age_range()
{
if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['age']))
			{
<<<<<<< HEAD
			echo "<div class='error'> Select your Age Range! </div>";
=======
			echo "Select your age range !";
>>>>>>> origin/master
			return false;
			}
			else return true;
	}
else return false;
}
 ?>