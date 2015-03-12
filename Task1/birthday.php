<?php
function validateBirthday($day, $month, $year){
$currDay=date("d");
$currMonth=date("m");
$currYear=date("Y");


	if(isset($day) && isset($month) && isset($year))
	{
		
		if(empty(trim($day)) || empty(trim($month)) || empty(trim($year)))
		{	
			echo "<div class='error'> Birthday field must be filled! </div>";
				return false;
		}
		
		else if(@checkdate($month,$day,$year)){
			if($currYear-$year>18)
			  return true;
			else if($currYear-$year==18){
				 if($currMonth>$month)
					return true;
				 else if($currMonth==$month){
					  if($currDay>=$day)
						 return true;
						 else
						 {
						 echo "<div class='error'> You have to be older than 18! </div>";
						 	return false;
						 }}
				 else
				 echo "<div class='error'> You have to be older than 18! </div>"; 	return false;}
			else
			echo "<div class='error'> You have to be older than 18! </div>"; 	return false;}
		else
		{
		 echo "<div class='error'> Invalid Date! </div></br>";
		 	return false;
		}
	 
	

	}
	
	else return true;
	
	
}

?>