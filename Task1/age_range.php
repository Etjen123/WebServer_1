<?php

function age_range()
{
if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['age']))
			{
			echo "<div class='error'> Select your Age Range! </div>";
			return false;
			}
			else return true;
	}
else return false;
}
 ?>