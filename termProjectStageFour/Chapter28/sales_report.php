<html>
<head></head>
<style>
	table{
		width:1000px;
	}
td{ 
	height: auto;

	padding: 5px;
	text-align: left;

	font-size: 14px;
}
td.right{ 

	text-align: right;

}
th.right{ 

	text-align: right;

}
th.left{ 

	text-align: left;

}
</style>
<body>

<?php

// include function files for this application
require_once('book_sc_fns.php');
session_start();

do_html_header("Sales Report");
include('function.php');
  $query = "select isbn, item_price, quantity from order_items";
  $result = $db->query($query);

  $num_results = $result->num_rows;


   	echo '<table> <tr>';
	echo '<th class=left>ISBN</th>'; 
	echo '<th class=left>Price</th>'; 
	echo '<th class=right>Quantity</th>'; 
	echo '<th class=right>Amount Paid</th>'; 
	echo '</tr>'; 
	echo '<tr><td colspan=4><hr></td></tr>';
$totaltime = 0;
  foreach ($result as $row) {

     
	echo '<tr>'; 
    echo '<td><b>'. $row['isbn'].'</b></td>'; 
	echo '<td>$ ' .number_format($row['item_price'],2).'</td>'; 
	echo '<td class=right><b>'. $row['quantity'].'</b></td>';
	echo '<td class=right>$ '.$row['item_price']*$row['quantity'].'</td>';

$totaltime +=$row['item_price']*$row['quantity'];
  }
  {	echo '<tr><td colspan=4><hr></td></tr>';
	echo '<tr>';
echo '<th>Total Sales: </th>';
echo '<th class=right colspan=3>$'.number_format($totaltime,2).'</th></tr>';
  }


echo '</tr></table>';
echo "</p>";


  $result->free();

  $db->close();
  if (check_admin_user()) {

  do_html_url("admin.php", "Back to administration menu");
} else {
  echo "<p>You are not authorized to enter the administration area.</p>";
}
do_html_footer();

?>
</body>
</html>