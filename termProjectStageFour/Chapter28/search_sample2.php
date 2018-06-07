<?php
  $pictures = array('0672329166', '067232976X', '0672319241',
                    '0743234804', '0756671604',
                    '1111138776', '0602399846',
                    '0470498706', '08000794052','0345530578');

include ('book_sc_fns.php');

// Create empty array to hold isbn numbers
	$isbn_array = array();
     
// query database for the isbn numbesr
   $conn = db_connect();
   $query = "select isbn from books";
   $result = @$conn->query($query);
   if (!$result) {
     echo "Could access the data";
   } else {
       
		$num_isbns = @$result->num_rows;
		while($row = $result->fetch_assoc()) {
			$isbn_array[] = $row;
			 
		}
	}

  shuffle($pictures);
?>
<html>
<head>
  <title>Search Page Sample</title>
</head>
<body>

<h1>Search Page Sample</h1>
<div align="center">
<table width = 100%>
<tr>

<?php
  for ($i = 0; $i < 3; $i++) {
    echo "<td>";
    echo ". $pictures[$i]";
    echo "</td>";
  }
?>
</tr>
</table>
</div>
</body>
</html>
