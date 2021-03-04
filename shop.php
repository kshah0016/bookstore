<?php

session_start();
$a = $_SESSION['s1'];

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'books');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

$query = "SELECT book_quantity FROM bookdetails WHERE book_name='$a'";
$result = mysqli_query($dbc,$query);

if (mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()){
	$i=$row["book_quantity"];
	}
	$i--;
}

$query1 = "UPDATE bookdetails SET book_quantity='$i' WHERE book_name='$a'";
mysqli_query($dbc,$query1);

if (mysqli_query($dbc, $query1)) {
  echo "Order Placed Successfully.";
} else {
  echo "Order is not placed successfully.";
}


session_destroy();
?>