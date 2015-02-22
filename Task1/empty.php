<?php
function validate($arr)

{	
		$counter= 0;
		$errors = 0;
		foreach ($arr as $key => $value) 
		{
			if (empty($arr[$key]))
			{
				$errors++;
			}
		}
		
			if($errors>0){
				echo "wrong";
				return false;
				
				}				
			else{
				echo "correct";
				return true;
				}
}

?>