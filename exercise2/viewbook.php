<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>View History</title>
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
<body>
<section>
<h1>Customer(s) Order History</h1>
<h2>Books</h2>
<?php  

@$fp = fopen("book.txt", 'rb');
if (!$fp) {
	echo "No history could be found.";
	exit;

}
while (!feof($fp)) {
$order= fgets($fp, 999);
echo $order."<br />";
}

?>
</section>
</body>

</html>