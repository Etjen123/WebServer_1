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
 
@$firstname = $_GET['firstname'];
@$lastname= $_GET['lastname'];

@$f_pass = $_GET['f_pass'];
@$s_pass = $_GET['s_pass'];


@$gender = $_GET['gender'];

@$email = $_GET['email'];
@$url = $_GET['url'];

@$birthday = $_GET['birthday'];
@$knowledge = $_GET['knowledge'];


 ?>

<div class="container">
<div class="alert alert-success" role="alert" align="center"><?php echo "Name: ".$firstname." ".$lastname. " <br/> Birthday: " .$birthday."<br/> Gender: " .$gender. " <br/> Knowledge: ". $knowledge. "<br/> URL: ". $url. "<br/> e-mail: ".$email;?>
</div>
   </div>
  </div>

  
<style type="text/css">
   body { background: #ededed; }
</style>

</body>
</html>