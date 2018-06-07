<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Assignment 3</title>
<style>
body {
	margin: auto;
	width: 1000px;
	background-color: #66799E;
}
section {
	font-family: arial;
	font-size: 20px;
}
h1 {background-color:white}
</style>
</head>
<body>

<?php
//Indexed Array
$states = array(
'Florida',
'New Jersey',
'Delaware',
'Maine',
'California',
'Texas',
'New York',
'Virginia',
'South Carolina',
'Hawaii'
);
	echo "<section> ";	
	echo "<h1>";
	echo "Original Indexed Array";
	echo"</h1> ";
	echo "<pre>\n";
print_r($states);//Displays the original index array
echo "</pre>\n";
sort($states);// Sorts the states in acsending order
		echo "<h1>";
		echo "Sort Indexed Array";
		echo"</h1> ";
for ($i = 0; $i<10; $i++) {

echo $states[$i]."<br /> ";//Displays the ascending order of the index array.

	
	
}
echo "<br /> <br />";	
//Associative Array

$books;
$books["Art"] = "80";
$books["Math"] = "30";
$books["Spanish"] = "45";
$books["Psychology"] = "100";
$books["Computer"] = "75";


	echo "<h1>";
	echo "Original Associative Array";
	echo"</h1> ";
echo "<pre>\n";
print_r($books);//Displays the original Associative Array
echo "</pre>\n";
ksort($books);//Will sort the key in ascending order. If you use the asort, it will sort the value in ascending order.
	
		echo "<h1>";
		echo "Ksort Associative Array";
		echo"</h1> ";
foreach ($books as $x => $y) {
	
 echo "$x  $y <br />";//Displays the ascending order of the associative array
}
echo "</section> ";




?>

</body>

</html>
