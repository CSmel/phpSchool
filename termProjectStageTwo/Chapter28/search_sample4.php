<?php
  

include ('book_sc_fns.php');

// Create empty array to hold isbn numbers
	$isbn = array();
     
// query database for the isbn numbesr
   $conn = db_connect();
   $query = "select isbn, catid from books";
   $result = @$conn->query($query);
  
   if (!$result) {
     echo "Could access the data";
   } else {
       // Get the number of records/isbns
		$num_isbns = @$result->num_rows;
		 
		 
		// 

		for ($count=0; $count < $num_isbns; $count++) {
			//$isbn_array[$count] =$result->fetch_assoc();
			$row =$result->fetch_assoc();
			$isbn_array[]= $row;
			
			
			
			
   }
	}
	


shuffle($isbn_array)
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
 echo "<table>";



	 // }
$num_array = array();

 foreach ($isbn_array as $value) {
	$num_array[]=$value['isbn'];


  }
	
for($i=0;$i<3; $i++) {
     echo "<tr>";
	$num_array[$i];
	 
	echo "<tr >";
    echo $row['catid'] . "<br>";
	echo "<td><img src=\"images/".$num_array[$i] .".jpg\"
                  // style=\"border: 1px solid black\"/>";
	echo ".$num_array[$i] .";

echo "</tr>";


 }				  



 echo "<table>";

/////////////////////////////////////////////////


?>

</tr>
</table>
</div>
</body>
</html>
