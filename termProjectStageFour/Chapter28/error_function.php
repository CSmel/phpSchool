<html>
<head>

</head>
<body>


<?php

$hostname = "localhost";  //the hostname you created when creating the database
$username = "root";   // the username specified when setting up the database
$password = "";    // the password specified when setting up the database
$database = "book_sc";   // the database name chosen when setting up the database 

@ $db = new mysqli($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {


     exit;
	
}
@ $db = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect()){
	echo "<section><h3>Customer Reviews</h3></section>";
}
?>
</body>
</html>