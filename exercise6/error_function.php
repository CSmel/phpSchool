<html>
<head>
<style>
section {
	color: black;
	font-family: "arial";
	background-color: #FFF;
	border: 2px black solid;
	margin-top: 10px;
	margin-bottom: 10px;
	padding: 20px;
	background-color: rgba(255, 255, 255, 0.9);
}
h3 {
	color:green
}
</style>
</head>
<body>



<?php

$hostname = "localhost";  //the hostname you created when creating the database
$username = "root";   // the username specified when setting up the database
$password = "";    // the password specified when setting up the database
$database = "book_sc";   // the database name chosen when setting up the database 

@ $db = new mysqli($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {

     echo "Error: Could not connect to database.  Please try again later.";
     exit;
	
}
@ $db = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect()){
	echo "<section><h3>Good connection to <b>MySQL Server</b></h3></section>";
}
?>
</body>
</html>