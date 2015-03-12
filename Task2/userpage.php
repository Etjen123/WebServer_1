<html>
<head>
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="style.css" />
=======
>>>>>>> origin/master
</head>

<body>
<?php

session_start();
$account_no = $_SESSION['account_no'];


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

  


$result = mysqli_query($con,"SELECT * FROM user WHERE account_no='$account_no'");

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
<<<<<<< HEAD


echo "<div class='container'>";

echo "<h2>Welcome ".$row['firstname']." ".$row['lastname']."</h2>";
 
echo "</div>";

?>
<div class="message">


<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>"  class="form"> 
<input type="submit" name="credit"  value="Credit Account"> <input type="number" name="credit"/>
</form>
<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>"  class="form"> 
<input type="submit" name="debit"  value="Debit account"> <input type="number" name="debit"/>
</form>

<form method="get" action="<?php  echo $_SERVER['PHP_SELF'];?>"  class="form">
<input type="submit" name="balance" value="Get Balance">
</form>

<form action="register.php" class="form">
  <input type="submit" value="Logout">
  
  </form>
  
	<?php
		
		if (isset($_GET['balance']))
		{
				$result = mysqli_query($con,"SELECT * FROM user WHERE account_no='$account_no'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$balance = mysqli_query($con,"SELECT balance FROM user WHERE account_no='$account_no'");
		$row = mysqli_fetch_array($balance, MYSQLI_ASSOC);
	echo "<p id='bal'>Your balance is: ".$row['balance']. "$ </p>";
		}
		
		else if (isset($_GET['credit']))
		{
				$result = mysqli_query($con,"SELECT * FROM user WHERE account_no='$account_no'");
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

				$credit_ammount= $_GET['credit'];
 
			$balance = mysqli_query($con,"SELECT balance FROM user WHERE account_no='$account_no'");
 
			$row = mysqli_fetch_array($balance, MYSQLI_ASSOC);
			$new_balance = $row['balance'] + $credit_ammount;
			
			$update = "UPDATE user SET balance='$new_balance' WHERE account_no='$account_no'";
			
			mysqli_query($con,$update);
			echo "<p id='bal'> Balance updated!</p>";
				}
				
				
		else if (isset($_GET['debit']))
		{
				
	$result = mysqli_query($con,"SELECT * FROM user WHERE account_no='$account_no'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	 
	 $debit_ammount= $_GET['debit'];
	 
	$balance = mysqli_query($con,"SELECT balance FROM user WHERE account_no='$account_no'");
	 
	$row = mysqli_fetch_array($balance, MYSQLI_ASSOC);
	$new_balance = $row['balance'] - $debit_ammount;
	
	if($new_balance>=0)
	{
	$update = "UPDATE user SET balance='$new_balance' WHERE account_no='$account_no'";
	mysqli_query($con,$update);
		echo "<p id='bal'> Balance updated!</p>";
	}
	else
			echo "<p id='bal'> Can't overdraft!</p>";
				}
	
	?>
	
 </div>
=======
echo "<h2>Welcome ".$row['firstname']." ".$row['lastname']."</h2>";
 


?>
<form method="get" action="balance.php"  class="form">
<input type="submit"  value="Get Balance"> 
</form>

<table>
<form method="get" action="credit.php"  class="form"> 
<tr><td><input type="submit"  value="Credit Account"></td> <td><input type="text" name="credit"/></td></tr>
</form>

<form method="get" action="debit.php"  class="form"> 
<tr><td><input type="submit"  value="Debit account"></td><td> <input type="text" name="debit"/></td></tr>

</form>
</table>

	<form action="register.php">
	<input type="submit" value="Logout">
	</form>
>>>>>>> origin/master
</body>
</html>