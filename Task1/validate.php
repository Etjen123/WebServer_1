<?php
function validate($arr)

{	
		$errors = 0;
		foreach ($arr as $key => $value) 
		{
			if (empty($arr[$key]))
			{
				$errors++;
			}
		}
		
			if($errors>0)
				return false;
				
			else
				return true;
}

?>