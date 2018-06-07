
<?php


include('error_function.php');
  $query = "select * from reviews where isbn = $isbn";
  $result = $db->query($query);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<section>";
        echo "<b>isbn:</b> " . $row["isbn"]."<br>";
		
		echo " <b>- Name:</b> " . $row["name"]."<br>";
		echo " <b>- Review:</b> " . $row["review"]. "<br>";
		echo "</section>";
		echo "<hr>";		

    }
} else {
    echo "0 reviews";
}

  $db->close();

?>

