<html>
<head>
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
@$objectivec = $_GET['objectivec'];

@$email = $_GET['email'];
@$url = $_GET['url'];

@$birthday = $day."/".$month."/".$year;
@$knowledge = $java."/".$c."/".$objectivec;



?>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>"  class="form">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" value="<?php echo (isset($_GET['firstname'])) ? $_GET['firstname'] : " "; ?>"	/><?php validateName($firstname);?>
	</p>

	<p>
	Last Name:<br />
	<input type="text" name="lastname" size="30" value="<?php echo (isset($_GET['lastname'])) ? $_GET['lastname'] : " "; ?>"/><?php validateName($lastname);?>
	</p>
	
	<p>
	Enter Password:<br />
	<input type="password" name="f_pass" size="30" /><?php validatePassword($f_pass,$s_pass) ?>
	</p>
	
	<p>
	Re-Enter Password:<br />
	<input type="password" name="s_pass" size="30" /> 
	</p>
	
	<p>
	Enter Birthday (dd/mm/yyyy):<br />
	<input type="text" name="day" size="2"  value="<?php echo (isset($_GET['day'])) ? $_GET['day'] : " "; ?>"	 />/
	<input type="text" name="month" size="2" value="<?php echo (isset($_GET['month'])) ? $_GET['month'] : " "; ?>"	 />/
	<input type="text" name="year" size="4" value="<?php echo (isset($_GET['year'])) ? $_GET['year'] : " "; ?>"	 /> 
	<?php validateBirthday($day,$month,$year);?>
	</p>
	
	<p>
	Gender:
	<?php validateGender();?>
	
	<br /><input type="radio" name="gender" value="Male" <?php if(@$_GET['gender']=="Male") echo "checked"; ?> /> Male
	<br /><input type="radio" name="gender" value="Female" <?php if(@$_GET['gender']=="Female") echo "checked"; ?>/> Female
	</p>
	
	<p>
	Age:
	<?php age_range();	?>
	<br /><input type="radio" name="age" value="18-25" <?php if(@$_GET['age']=="18-25") echo "checked"; ?> /> 18-25
	<br /><input type="radio" name="age" value="26-30" <?php if(@$_GET['age']=="26-30") echo "checked"; ?> /> 26-30
	<br /><input type="radio" name="age" value="31-35" <?php if(@$_GET['age']=="31-35") echo "checked"; ?>/> 31-35
	</p>
	
	<p>
	Skills:
	<br /><input type="checkbox" name="java" value="java" /> Java
	<br /><input type="checkbox" name="c" value="c" /> C#
	<br /><input type="checkbox" name="objectivec" value="objectivec" /> Objective-C
	</p>
	
	<p>
	Email:<br />
	<input type="text" name="email" size="30" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : " "; ?>"	 />
	<?php validateEmail($email);?>
	</p>
	
	<p>
	URL:<br />
	<input type="text" name="url" size="30" value="<?php echo (isset($_GET['url'])) ? $_GET['url'] : " "; ?>"/> 
	<?php  validateUrl($url);	?>
	</p>
	
	<p>
	<input type="submit" name="submit" value="Submit Information" />
	</p>
	<?php
	
		if(  validateName($firstname) && validateName($lastname)  && validatePassword($f_pass,$s_pass)  && validateBirthday($day,$month,$year) && validateGender() && age_range() && validateEmail($email) && validateUrl($url) && isset($_GET['submit']))
		{
				header('Location: http://localhost/Task1/landing.php?firstname='.$firstname.'&lastname='.$lastname.'&birthday='.$birthday.'&gender='.$gender.'&knowledge='.$knowledge.'&email='.$email.'&url='.$url);
				exit();
		}
	?>

	
</form>

</body>

</html>
