<?php

function my_function_string($string1){//First function

//The function below will display a custom string from main.php
echo ($string1);
echo "<br/>";
}
my_function_string($string1);


function my_function_aver ($var1, $var2, $var3){//Second function


echo "<h2 style=\"text-align:left\">The function below will find the sum, then it will find the average.</h2>";
echo "<br/>";
echo "<h3 style=\"text-align:left\">Variables</h3>";
echo "Variable One: ". $var1 . " <br/>";
echo "Variable Two: ". $var2 . " <br/>";
echo "Variable Three: ". $var3 . " <br/>";
$total_num = $var1 + $var2 + $var3;
$average = $total_num / 3;
echo "Average : ". $average . "<br/>";


}
my_function_aver($var1, $var2, $var3);

//Third function
function my_function_total ($tax_rate, $price, $qty){


$total= 0.0;
echo "<br/>";
echo "<h2 style=\"text-align:left\">The function below will find the Grand Total.</h2>";

echo "<h3 style=\"text-align:left\">Formulas</h3>";
echo "Price X Quantity = Subtotal";
echo "<br/>";
echo "Subtotal X Tax Rate = Tax Amount";
echo "<br/>";
echo "Subtotal + Tax Amount = Grand Total";
echo "<br/>";
echo "<br/>";
echo "<h3 style=\"text-align:left\">Variables</h3>";
echo "Price: $" . $price . "<br/>";
echo "Quantity: " . $qty . "<br/>";
echo "Tax: " . $tax_rate . "<br/>";
echo "-------------------<br/>";

$subtotal = $price * $qty;	
$tax = $subtotal * $tax_rate;//Calculate the tax amount
$total = $subtotal + $tax;
echo "The Grand Total is: $";
return number_format($total,2);
}
echo my_function_total($tax_rate, $price, $qty);
?>
