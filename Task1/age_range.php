<?php

function age_range()
{
if (isset($_GET["submit"]) )
	{
			if(!isset($_GET['age']))
			{
			echo "Select your age range !";
			return false;
			}
			else return true;
	}
else return false;
}
 ?>