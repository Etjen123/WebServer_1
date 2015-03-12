<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


		<title>Personal Data</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	</head>
<body>


<?php
include 'empty.php';
include 'name.php';
include 'email.php';
include'url.php';
include 'password.php'; 
include 'birthday.php';
include 'gender.php';
include 'age_range.php';


@$firstname = $_GET['firstname'];
@$lastname= $_GET['lastname'];

@$f_pass = $_GET['f_pass'];
@$s_pass = $_GET['s_pass'];

@$day = $_GET['day'];
@$month = $_GET['month'];
@$year = $_GET['year'];

@$gender = $_GET['gender'];

@$java = $_GET['java'];
@$c = $_GET['c'];
@$objective_c = $_GET['objectivec'];

@$email = $_GET['email'];
@$url = $_GET['url'];

@$birthday = $day."/".$month."/".$year;
@$knowledge = $java."/".$c."/".$objective_c;




?>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>"  class="form">
	<div class="container">

	<div class="panel panel-primary">
  <div class="panel-heading">
  	<div class="panel-heading text-center">
    <h1 class="panel-title">EET IT COMPANY</h1>
  </div>
</div>
</div>

	
<div class="input-group1">
  <span class="input-group-addon" id="basic-addon1">First Name</span>
  <input type="text" name="firstname" class="form-control" value="<?php echo (isset($_GET['firstname'])) ? $_GET['firstname'] : " "; ?>"	/><?php validateName($firstname);?>
	</div>
	
	<br/>
	<div class="input-group1">
  <span class="input-group-addon" id="basic-addon2">Last Name</span>
  <input type="text" name="lastname" class="form-control" value="<?php echo (isset($_GET['lastname'])) ? $_GET['lastname'] : " "; ?>"/><?php validateName($lastname);?>
	</div>
	
	<br/>
<div class="input-group1">
  <span class="input-group-addon" id="basic-addon3">Password</span>
  <input type="password"  name="f_pass" class="form-control" name="f_pass"/><?php validatePassword($f_pass,$s_pass) ?>
<br/>

	
	<div class="input-group1">
  <span class="input-group-addon" id="basic-addon4">Confirm Password</span>
  <input type="password" name="s_pass" class="form-control" >
	</div>
<br/>
	
	<div class="input-group1">
  <span class="input-group-addon" id="basic-addon5">Birthday</span>
  <input type="text" name="day" class="col-sm-4" name="day" size="2"  value="<?php echo (isset($_GET['day'])) ? $_GET['day'] : " "; ?>" > </input>
  <input type="text" name="month" class="col-sm-4" name="month" size="2"  value="<?php echo (isset($_GET['month'])) ? $_GET['month'] : " "; ?>"> </input>
  <input type="text" name="year" class="col-sm-4" name="year" size="4"  value="<?php echo (isset($_GET['year'])) ? $_GET['year'] : " "; ?>"	 > </input> 
  <?php validateBirthday($day,$month,$year);?>
</div>

	
	<div class="radio">
  <span class="input-group-addon" id="basic-addon">Gender</span>
  
  	<label><input type="radio" name="gender" value="Male" <?php if(@$_GET['gender']=="Male") echo "checked"; ?> /> Male</label>
  </br>
  	<label><input type="radio" name="gender" value="Female" <?php if(@$_GET['gender']=="Female") echo "checked"; ?>/> Female</label>
  	<?php validateGender();?>
</div>
	<p>
	
	<div class="radio">
  <span class="input-group-addon" id="basic-addon">Age</span>
  
  	<label><input type="radio" name="age" value="18-25" <?php if(@$_GET['age']=="18-25") echo "checked"; ?> /> 18-25</label>
  </br>
  	<label><input type="radio" name="age" value="26-30" <?php if(@$_GET['age']=="26-30") echo "checked"; ?> /> 26-30</label>
  	</br>
  	<label><input type="radio" name="age" value="31-35" <?php if(@$_GET['age']=="31-35") echo "checked"; ?>/> 31-35</label>
  	<br/><?php age_range();	?>
</div>
	

	<span class="input-group-addon" id="basic-addon">Skills</span>
    <div class="checkbox">
      <label><input type="checkbox" name="java" value="Java">Java</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"  name="c" value="C">C#</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="objectivec" value="Objective-C" >Objective-C</label>
    </div>
	
	
	
	<div class="input-group">
  <span class="input-group-addon" id="addon">E-mail</span>
  <input type="text" class="form-control" size="30" name="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : " "; ?>"	 /> 
	</div>
	<?php validateEmail($email);?><br/>

<br/>	
<div class="input-group">
  <span class="input-group-addon" id="addon">URL</span>
  <input type="text" class="form-control" name="url" size="30" value="<?php echo (isset($_GET['url'])) ? $_GET['url'] : " "; ?>"/> 
	
	</div>
	<?php  validateUrl($url);	?>
	<br/>
	<br/>

	
	
	<input class="btn btn-primary" type="submit" name="submit" value="Submit Information">
	<br/>
	<div class="hide">
	<?php
	
		if( validateName($firstname) && validateName($lastname)  && validatePassword($f_pass,$s_pass)  && validateBirthday($day,$month,$year) && validateGender() && age_range() && validateEmail($email) && validateUrl($url) && isset($_GET['submit']))
		{
				header('Location: http://localhost/Task1/landing.php?firstname='.$firstname.'&lastname='.$lastname.'&birthday='.$birthday.'&gender='.$gender.'&knowledge='.$knowledge.'&email='.$email.'&url='.$url);
				exit();
		}
?>

	<style type="text/css">
   body { background: #ededed; }
</style>
	</div>
</form>

</body>

</html>
