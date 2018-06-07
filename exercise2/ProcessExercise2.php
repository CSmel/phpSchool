<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form Process</title>
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
	font-size: 30px;
	font-weight: 100;
	letter-spacing: 10px;
}
h2 {
	color: #51698F;
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
<h1>Thank you for ordering!</h1>
<?php  $qty = $_POST['qty'];
 $name = $_POST['name'];  
 $booktype = $_POST['booktype']; 
 $total = 0.00;

 echo "$name,  your order for $qty  $booktype book(s) is being processed.... <br/>";  
 switch ($booktype) {
 case 'art':
 $total = 30 * $qty; break;  
 case 'computer':
 $total = 60 * $qty;  break;
 case 'math':
 $total = 100 * $qty;  break;
  case 'spanish':
 $total = 80 * $qty;  break;

 }


echo "Your total is $".number_format($total,2)."<br />";

// Open file for appending
$fp = fopen("book.txt",'a');
if (!$fp) {
echo "Your order cannot be processed";
exit;
}
fwrite($fp, $qty . "\r\n");
fwrite($fp, $booktype . "\r\n");
fwrite($fp, $name . "\r\n");
fwrite($fp, "\r\n");
fwrite($fp, "\r\n");
fclose($fp);

?>
<br/>
View <a href="viewbook.php">Order History</a> 
</section>
</body>

</html>
