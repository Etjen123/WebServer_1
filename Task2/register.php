<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>
Online Banking
</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<?php

include 'name.php';
include 'password.php';

<<<<<<< HEAD

=======
>>>>>>> origin/master
@$firstname = $_GET['firstname'];
@$lastname = $_GET['lastname'];
@$f_pass = $_GET['f_pass'];
@$s_pass = $_GET['s_pass'];
@$phone = $_GET['phone'];


?>
<body>
<<<<<<< HEAD
	<section class="container">
<h1 class="header">Enter your data below</h1>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>" class="form">
<section class="container2">
	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" value="<?php echo (isset($_GET['firstname'])) ? $_GET['firstname'] : " "; ?>" /> 
=======
<h1 class="header">Enter your data below</h1>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>" class="form">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" value="<?php echo (isset($_GET['firstname'])) ? $_GET['firstname'] : " "; ?>" /> <?php validateName($firstname);?>
>>>>>>> origin/master
	</p>

	<p>
	Last Name:<br />
<<<<<<< HEAD
	<input type="text" name="lastname" size="30" value="<?php echo (isset($_GET['lastname'])) ? $_GET['lastname'] : " "; ?>" /> 
=======
	<input type="text" name="lastname" size="30" value="<?php echo (isset($_GET['lastname'])) ? $_GET['lastname'] : " "; ?>" /> <?php validateName($lastname);?>
>>>>>>> origin/master
	</p>
	
	<p>
	Enter Password:<br />
<<<<<<< HEAD
	<input type="password" name="f_pass" size="30" />
=======
	<input type="password" name="f_pass" size="30" /><?php validatePassword($f_pass,$s_pass);?>
>>>>>>> origin/master
	</p>
	
	<p>
	Re-Enter Password:<br />
	<input type="password" name="s_pass" size="30" />
	</p>
	
	<p>
	Phone number (Optional) :<br />
	<input type="text" name="phone" size="30" value="<?php echo (isset($_GET['phone'])) ? $_GET['phone'] : " "; ?>" />
	</p>
	
	<p>
	<input type="submit" name="submit" value="Register" />
	</p>
	
	<p>Already have an account? 
<<<<<<< HEAD
	<a href="login.php"><button class="button" type="button">Login</button></a>
	</p>
	<section class="container">
	<section class="required">
	<?php validateName($firstname);?> <div class="hide"><?php validateName($lastname);?></div>
	<br/>
	<?php validatePassword($f_pass,$s_pass);?>
	<br/>
</section>
</section>
</section>
</section>
	
	<div class="hide">
=======
	<a href="login.php"><button type="button">Login</button></a>
	</p>

>>>>>>> origin/master
	<?php 
	if( validateName($firstname) && validateName($lastname) && validatePassword($f_pass,$s_pass) && isset($_GET['submit']))
	{	
		
		$firstname =trim($firstname);
		$lastname =trim($lastname);
		$f_pass =trim($f_pass);
		$s_pass =trim($s_pass);
		$phone =trim($phone);
		
		
		 @$con = mysqli_connect("localhost", "root"); 
		if (!$con)
		  {
		  die('Connection failed: '. mysqli_connect_error());
		  }
		  
		$db = mysqli_select_db($con, "banking");

		if (!$db)
		  {
		  die('Could not select a valid database'. mysql_error());
		  }
		  
		 $account_no =  mt_rand(10000000, 99999999);
		 
		 $hash = password_hash($f_pass, PASSWORD_DEFAULT);
		  
		$registration = " INSERT INTO `banking`.`user` (`firstname`, `lastname`, `password`, `account_no`, `tel_number`, `balance`) 
												VALUES ('$firstname', '$lastname', '$hash', '$account_no', '$phone', '0')";
									
		  $result = mysqli_query($con,$registration);

		
		  if($result)
		  {
<<<<<<< HEAD
		  echo "<p id='reg'>Registration successful!</br>" ;
		  echo "This is your account number: ".$account_no."</p>";
		  }
		  
	}


	?>
</div>
=======
		  echo "Registration successful!</br>";
		  echo "This is your account number: ".$account_no;
		  }
		  
	}	

	?>
>>>>>>> origin/master
</form>

</body>

</html>