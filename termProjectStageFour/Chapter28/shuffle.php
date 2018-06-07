<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();



   $isbn = array('0672319241'
,'0672329166'
,'067232976X'
,'1508409005'
,'0399519904'
,'0988443120'
,'1111138776'
,'1929164424'
,'1603424636'
,'0603426947'
,'0602399846'
,'1589790510'
,'1476789630'
,'0345530578'
,'1594633665'
,'2080201301'
,'3836527952'
,'0810959542'
,'1609612248'
,'1937715418'
,'014312319x');

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

  shuffle($isbn);
 
 /////////////////////////////////////////////////////////
 
 
 for ($i = 0; $i < 3; $i++) {


	  

  // get this book out of database///////
  $book = get_book_details($isbn[$i]);
 
  do_html_header($book['title']);
  display_book_details($book);////

  // set url for "continue button"
  $target = "index.php";
  if($book['catid']) {
    $target = "show_cat.php?catid=".$book['catid'];
  }

  // if logged in as admin, show edit book links
  if(check_admin_user()) {
    display_button("edit_book_form.php?isbn=".$isbn[$i], "edit-item", "Edit Item");
    display_button("admin.php", "admin-menu", "Admin Menu");
    display_button($target, "continue", "Continue");
  } else {
    display_button("show_cart.php?new=".$isbn[$i], "add-to-cart",
                   "Add".$book['title']." To My Shopping Cart");
    display_button($target, "continue-shopping", "Continue Shopping");
  }

 }
   
  do_html_footer();

?>