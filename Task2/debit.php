<html>
<head>
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
echo "<h2>Welcome ".$row['firstname']." ".$row['lastname']."</h2>";
 
 $debit_ammount= $_GET['debit'];
 
$balance = mysqli_query($con,"SELECT balance FROM user WHERE account_no='$account_no'");
 
	$row = mysqli_fetch_array($balance, MYSQLI_ASSOC);
	$new_balance = $row['balance'] - $debit_ammount;
	
	if($new_balance>=0)
	{
	$update = "UPDATE user SET balance='$new_balance' WHERE account_no='$account_no'";
	mysqli_query($con,$update);
	}
	else
		echo "Can't overdraft";


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
	

</body>
