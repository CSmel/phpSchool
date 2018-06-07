<?php
require_once('book_sc_fns.php');
 $target = "index.php";

session_start();

	$id=['0'];
	$isbn=$_POST['isbn'];
	$name=$_POST['name'];
	$review=$_POST['review'];
   $conn = db_connect();


   // insert new category
   $query = "insert into reviews values
            ('','".$isbn."','".$name."','".$review."')";
   $result = $conn->query($query);
   
   if (!$result) {
     return false;
   } else {header('Location: ' . $_SERVER['HTTP_REFERER']);
     return true;
   }







?>

