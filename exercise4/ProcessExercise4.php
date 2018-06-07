<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Form Process</title>
<style>
body {
	margin: auto;
	width: 1000px;
	background-color: #66799E;
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
	padding: 60px;
	background-color: rgba(255, 255, 255, 0.9);
	font-size:20px;
	height:600px
}
.error {
	color: red;
	font-weight:bold
}
.good {
	color:#009900;
	font-weight:bold
}
#container1 {border: 2px solid black;
padding:20px;

margin-bottom:10px







}

#container{
	border: 2px black solid;
	padding:2px;


	
}
</style>
</head>

<body>
<section> 
	<?php  
echo "<div id=\"container\"><h1>Thank you for ordering!</h1>";

 $first_name = $_POST['first_name']; 
 $last_name = $_POST['last_name'];  
 $booktype = $_POST['booktype'];
 $qty = $_POST['qty'];
 $email = $_POST['email']; 
 
 $total = 0.00;
 
 $tax = 0.07;
 
 $grand_total = 0.00;
 

echo"<h2>";

 $string = $first_name . ' ' . $last_name;
 echo ucwords($string);
 echo ", your order for $qty  $booktype book(s) is being processed.... <br/></h2></div>"; //Close container div
echo"<br/>";

echo"<br/>";
 switch ($booktype) {
 case 'art':
 $total = 30 * $qty;
$tax_total = $tax *  $total;  
$grand_total = $tax_total + $total; break;
 case 'computer':
 $total = 60 * $qty; 
 $tax_total = $tax *  $total;  
$grand_total = $tax_total + $total; break;
 case 'math':
 $total = 100 * $qty;
 $tax_total = $tax *  $total;  
$grand_total = $tax_total + $total; break;
  case 'spanish':
 $total = 80 * $qty;
 $tax_total = $tax *  $total;  
$grand_total = $tax_total + $total; break;

 }//Verify the first name was entered.
  if (!preg_match("^[a-zA-Z\-\.]^",
$first_name))
 {
 echo "<p><span class=\"error\">&#x2717;</span> That is not a valid first name </p>";
 echo "<p>Please return to the previous page and try again </p>";

}
else  { 
echo"<br/>";
echo"<br/>";

echo "<span class=\"good\">&#x2713;</span> Valid first name";
echo"<br/>";
}
//Verify the last name was entered.
  if (!preg_match("^[a-zA-Z\-\.]^",
$last_name))
 {

 echo "<span class=\"error\">&#x2717;</span> That is not a valid last name </p>";
 echo "<p>Please return to the previous page and try again </p>";

}
else  { 

echo"<br/>";
echo "<span class=\"good\">&#x2713;</span> Valid last name";
echo"<br/>"; 
}
//Verify the quantity was entered.
  if ($qty == 0)
 {
 echo "<p><span class=\"error\">&#x2717;</span> That is not a valid quantity value. </p>";
 echo "<p>Please return to the previous page and try again </p>";

}
elseif  ($qty > 0){
echo"<br/>";
echo "<span class=\"good\">&#x2713;</span> Valid quantity value";
echo"<br/>"; 
}

//Verify the email was entered.
 if (!preg_match("^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$^",
$email))
 {
	 echo"<br/>";
 echo "<p><span class=\"error\">&#x2717;</span> That is not a valid email address </p>";
 echo "<p>Please return to the previous page and try again </p>";
 exit;
}
else  { 

echo"<br/>";
echo "<span class=\"good\">&#x2713;</span> Valid email address";
echo"<br/>"; 
echo"<br/>"; 

echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span class=\"box\">$email</b></span>";
echo"<br/>"; 
}
echo"<br/>";
echo "<div id= \"container1\">";
echo "Your <B>SUB TOTAL</B> is: <b>$".number_format($total,2)."</b><br />";
echo "Your <B>TAX</B> is: <b>$".number_format($tax_total,2)."</b><br />";

echo"<hr>";

echo "Your <B>GRAND TOTAL</B> is: <b>$".number_format($grand_total,2)."</b><br />";
echo "</div";



?><br />
</section>

</body>

</html>
