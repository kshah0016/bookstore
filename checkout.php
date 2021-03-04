<?php
session_start();
$id = $_GET['id'];
$_SESSION['s1']=$id;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Check-out</title>
</head>
<body><br/><br/>
	<form method="post" action="shop.php">
		First Name :- <input type="text" name="fname"><br/><br/>
		Last Name :- <input type="text" name="lname"><br/><br/>
		Payment Option :- <input type="radio" name="p1" value="Credit Card/Debit Card">Credit Card/Debit Card<input type="radio" name="p1" value="Internet Banking">Internet Banking<br/><br/>
		<input type="submit" name="Submit">
	</form>
</body>
</html>