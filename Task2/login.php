<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>
Online Banking
</title>
<link rel="stylesheet" type="text/css" href="style.css" />


<?php

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


@$lastname = trim($_GET['lastname']);
@$f_pass = trim($_GET['f_pass']);
@$account = trim($_GET['account']);



if(isset($_GET['submit']))
{
	
	
	$query = "SELECT * FROM user WHERE lastname='$lastname' AND account_no='$account'";
	
	$result = mysqli_query($con, $query);
	
	//$row = mysqli_fetch_row($result);
	
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$pass = $data['password'];
	
	echo $pass;
	echo $f_pass;

	 if(password_verify($f_pass, $pass))
		{	
		session_start();
		$_SESSION['account_no'] = $account;
		 header('Location: http://localhost/Task2/userpage.php');
	
	 }
	 
	 else 
		 echo "Wrong pass";
	 
	
}
 ?>

</head>


<body>
<<<<<<< HEAD
<section class="container">
<h1 class="header">Log in into your Bank account</h1>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>" class="form">
<section class="container2">
=======
<h1 class="header">Log in into your Bank account</h1>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>" class="form">

>>>>>>> origin/master
	<p>
	Last Name:<br />
	<input type="text" name="lastname" size="30" />
	</p>
	
	<p>
	Enter Password:<br />
	<input type="password" name="f_pass" size="30" />
	</p>
	
	<p>
	Account Number:<br />
	<input type="text" name="account" size="30" />
	</p>
	
	
	<p>
	<input type="submit" name='submit' value="Login" />
	</p>

<<<<<<< HEAD
	<p>Don't have an account?
	<a href="register.php"><button class="button" type="button">Register</button></a>
	</p>
</section>
</section>
=======
	<p>Don't have an account? 
	<a href="register.php"><button type="button">Register</button></a>
	</p>
>>>>>>> origin/master
</form>

</body>

</html>