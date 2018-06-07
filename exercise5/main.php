<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Book Form</title>
<style>
body {
	margin:auto;
	width:1000px;
	background-color:#66799E
}
h1 {
	color: #000000;
	text-align: center;
	font-family: "arial";
	font-size: 26px;
	font-weight: 100;
	letter-spacing: 10px;
}
h2 {
	color: #000000;
	text-align: center;
	font-family: "MySecondFont", "arial";
	font-weight: 100;
}


section {
	color: black;
	font-family: "MySecondFont", "arial narrow", "arial";
	background-color: #FFF;
	border: 2px black solid;
	margin-top: 10px;
	margin-bottom: 10px;
	padding: 20px;
	background-color: rgba(255, 255, 255, 0.9);
}
</style>
</head>

<body>
<section>
<?php 
//String for my first function.
 $string1 = "<h1>This is my first include file for a PHP script.</h1>";
 echo "<br />";
//Variables for the second function.
 $var1= 100;
 $var2 = 20;
 $var3 = 50;

 echo "<br />";
 //Variables for the third function.
 $tax_rate = .07;
$price = 10;
$qty = 2;

include('inc_functions.php');
 ?>
</section>
</body>

</html>
