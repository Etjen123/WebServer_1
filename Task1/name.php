<?php
function validateName($fullname){

if(!preg_match("/^[a-zA-Z'. -]+$/", stripslashes($fullname)) )
{
	$nameErr="Invalid First Name</br>";
	echo $nameErr;
}
	


}






?>