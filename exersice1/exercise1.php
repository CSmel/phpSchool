<?php
/*I wasn't too sure if I had to use two seperate if statements, but I wanted to use $name & $county on one line. 
I have a second file with two seperate if statements */
$name =$_POST['name'];
$qty =$_POST['qty'];
$county =$_POST['county'];
//If statement that will read an error.
if ( $qty == 0 ){
	echo '<p style="color:red; font-size:24px">';
	echo "You have an Error on the form! ";
	echo '<br> ';
	echo "Your order will not be processed.";
	echo '</p> ';
	echo "Error(s)";
	echo '<br> ';
	echo "You provided an invalid quantity value, please enter a number greater than 0.";
	echo '<br> ';



}// A valid if statement. 

elseif(($qty > 0 ) && ($county == "1")){
echo "$name from Manatee County, your order is being processed. <br>";
}
elseif(($qty > 0 )&& ($county == "2")){
echo "$name from Sarasota County, your order is being processed. <br>";
}
elseif(($qty > 0 )&& ($county == "3")){
echo "$name from Polk County, your order is being processed. <br>";
}
else{
echo "$name from Unknown County, your order is being processed. <br>";// On the html file I left an empty option, so the PHP script could display "unknown"
}

$totalamount = 0.00;


define('WIDGET', 10);// the cost of the widget
define('TAXRATE',.065); // 6.5% sales tax

echo '<p style="font-size:20px">';
echo "Overview of order:<br>";
echo "__________________________<br />";
echo '</p> ';
echo "Quantity: " .number_format( $qty,0). " Widgets";
echo '<br />';

$totalamount = $qty * WIDGET;
echo "Subtotal: $".number_format($totalamount,2)."<br />";

$taxamount = $totalamount * TAXRATE;
echo "Tax: $".number_format($taxamount,2)."<br />";

$grandtotal = $totalamount + $taxamount;
echo "Grandtotal: $".number_format($grandtotal,2)."<br />";
echo "________________________________<br />";




  ?>