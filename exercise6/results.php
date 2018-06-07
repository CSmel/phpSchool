<html>
<head>
  <title>Book-O-Rama Search Results</title>
  <style>
body {
	margin:auto;
	width:1000px;
	background-color:#66799E
}
p {font-size:20px}
h1 {
	color: #000000;
	text-align: center;
	font-family: "arial";
	font-size: 26px;
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
	font-family: "arial";
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
<h1>Book-O-Rama Search Results</h1>
<?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }




include('error_function.php');
  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p><section>Number of books found: ".$num_results."</section></p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><b>".($i+1).". Title: </b>";
     echo htmlspecialchars(stripslashes($row['title']));
	 echo "<br /><b>ISBN: </b>";
     echo stripslashes($row['isbn']);
     echo "<br /><b>Author: </b>";
     echo stripslashes($row['author']);
     echo "<br /><b>Price: </b>";
     echo stripslashes($row['price']);
	 echo "<br /><b>Cat. ID: </b>";
     echo stripslashes($row['catid']);
	 echo "<br /><b>Description: </b>";
     echo stripslashes($row['description']);
     echo "</p>";
  }

  $result->free();
  $db->close();

?>
</body>
</html>
