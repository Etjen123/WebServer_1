<html>
<head>
</head>

<body>

 <?php
 
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

<h2><?php echo $firstname." ".$lastname;?></h2>

</body>
</html>