<?php
function validateBirthday($day, $month, $year){
$currDay=date("d");
$currMonth=date("m");
$currYear=date("Y");


if(@checkdate($month,$day,$year)){
	if($currYear-$year>18)
	   echo "Correct";
	else if($currYear-$year==18){
		 if($currMonth>$month)
			echo"Correct";
		 else if($currMonth==$month){
			  if($currDay>=$day)
				 echo "correct";
				 else
				 echo "below 18";}
		 else
		 echo "below 18";}
	else
	echo "below 18";}
else
echo "Wrong date</br>";
	

}
?>