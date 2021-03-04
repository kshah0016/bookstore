<body>
        <h2><center> LIST OF BOOKS </center></h2>
        <div class="header">
            <img src="list.jpg" style="width:100%">
        </div>
</body>
<?php

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'books');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

$query = "SELECT * FROM bookdetails";
$result = mysqli_query($dbc,$query);

echo "<center><table border='2' height='300' width='500' <tr><th>Name of Books</th><th>quantity</th></tr></center>";

if (mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc()){
	$j=$row["book_name"];
	echo "<tr><td><a href='checkout.php?id=$j'><center>".$row["book_name"]."</a></center></td><td><center>".$row["book_quantity"]."</cener></td></tr><br>"	;
	}
}

echo "</table>";

?>