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

	


@$user["firstname"] = $_GET['firstname'];
@$user["lastname"]= $_GET['lastname'];

@$user["f_pass"] = $_GET['f_pass'];
@$user["s_pass"] = $_GET['s_pass'];

@$user["day"] = $_GET['day'];
@$user["month"] = $_GET['month'];
@$user["year"] = $_GET['year'];

@$user["gender"] = $_GET['gender'];

@$java = $_GET['java'];
@$c = $_GET['c'];
@$objectivec = $_GET['objectivec'];

@$user["email"] = $_GET['email'];
@$user["url"] = $_GET['url'];

@$name = $user["firstname"]. " " .$user["lastname"];
@$birthday = $user["day"]."/".$user["month"]."/".$user["year"];

if (isset($_GET["submit"]) )
{

validate($user);
validateName($name);
validateUrl($user["url"]);
validateEmail($user["email"]);
validatePassword($user["f_pass"], $user["s_pass"]);
validateBirthday($user["day"],$user["month"],$user["year"]);
}


?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"  class="form">

	<p>
	First Name:<br />
	<input type="text" name="firstname" size="30" value="<?php echo (isset($_GET['firstname'])) ? $_GET['firstname'] : " "; ?>"	/>
	</p>

	<p>
	Last Name:<br />
	<input type="text" name="lastname" size="30" value="<?php echo (isset($_GET['lastname'])) ? $_GET['lastname'] : " "; ?>"	  />
	</p>
	
	<p>
	Enter Password:<br />
	<input type="password" name="f_pass" size="30" />
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
	</p>
	
	<p>
	Gender:
	<br /><input type="radio" name="gender" value="Male" /> Male
	<br /><input type="radio" name="gender" value="Female"/> Female
	</p>
	
	<p>
	Age:
	<br /><input type="radio" name="age" value="18-25" /> 18-25
	<br /><input type="radio" name="age" value="26-30" /> 26-30
	<br /><input type="radio" name="age" value="31-35" /> 31-35
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
	</p>
	
	<p>
	URL:<br />
	<input type="text" name="url" size="30" value="<?php echo (isset($_GET['url'])) ? $_GET['url'] : " "; ?>"	 />
	</p>
	
	<p>
	<input type="submit" name="submit" value="Submit Information" />
	</p>

</form>

</body>
</html>