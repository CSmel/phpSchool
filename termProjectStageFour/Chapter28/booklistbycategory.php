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
th.right{ 

	text-align: right;

}
th.left{ 

	text-align: left;

}
td.right{ 

	text-align: right;

}

</style>
<body>

<?php

// include function files for this application
require_once('book_sc_fns.php');
session_start();

do_html_header("Book List by Category");
include('function.php');
  $query = "select categories.catid, catname, books.isbn, title, quantity from categories, books, order_items 
WHERE categories.catid = books.catid and
books.isbn = order_items.isbn ORDER BY catid ASC ;";//Organized the data by the CatID in a ascending order.
  $result = $db->query($query);

  $num_results = $result->num_rows;
	echo '<table> <tr>';
	echo '<th>CatID</th>'; 
	echo '<th>Category</th>'; 
	echo '<th>ISBN</th>'; 
	echo '<th class=left>Title</th>'; 
	echo '<th>Quantity</th>'; 
	echo '</tr>';
	echo '<tr><td colspan=5><hr></td></tr>';
  foreach ($result as $row) {

	echo '<tr>'; 
    echo '<td><b>'. $row['catid'].'</b></td>'; 
	echo '<td>' .$row['catname'].'</td>'; 
	echo '<td class=right><b>'. $row['isbn'].'</b></td>';
	echo '<td>'.$row['title'].'</td>';
	echo '<td class=right><b>'.$row['quantity'].'</b></td>';

  }
  	echo '</tr></table>';
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