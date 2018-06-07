<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
  <style>
body {
	margin:auto;
	width:1000px;
	background-color:#66799E;
	font-family: arial
}
table {
	color: black;
	font-family: "MySecondFont", "arial narrow", "arial";
	background-color: #FFF;
	border: 2px black solid;
	margin:auto;
	margin-top: 10px;
	margin-bottom: 10px;
	padding: 20px;
	background-color: rgba(255, 255, 255, 0.9);
	
}
td.right {
	text-align:right
}
.ch {
	background-color : #D1E0E5;
	border: 1px solid black;
}



</style>
</head>
<body>
<h1>Book-O-Rama Results</h1>
<?php
$string1 = "<h1>Book-O-Rama Book Entry Results</h1>";





  // create short variable names
	$isbn=$_POST['isbn'];
	$author=$_POST['author'];
	$title=$_POST['title'];
	$catid=$_POST['catid'];
	$catid["1"] = "Internet";
	$catid["2"] = "Self_help";
	$catid["3"] = "Equine";
	$catid["4"] = "Gardening";
	$catid["5"] = "Fiction";
	$catid["6"] = "Art";
	$catid["7"] = "Running";
	$catid["8"] = "Traveling";


  $price=$_POST['price'];
  $description=$_POST['description'];

  if (!$isbn || !$author || !$title || !$price || !$description) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $isbn = addslashes($isbn);
    $author = addslashes($author);
    $title = addslashes($title);
	$catid = addslashes($catid);
    $price = doubleval($price);
	$description = addslashes($description);
  }

 include('error_function.php');
 
 echo "</br>";
  $query = "insert into books values
            ('".$isbn."','".$author."', '".$title."','".$catid."', '".$price."', '".$description."')";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." book inserted into database.";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
</body>
</html>
