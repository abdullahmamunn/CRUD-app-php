<?php
 
   include('dbConnection.php');

   $bid    = $_GET['bookid'];
   $title  = $_GET['bookt'];
   $author = $_GET['booka'];
   $price  = $_GET['bookp'];
  

   $query = "UPDATE book_info SET book_title = '$title',book_author = '$author', book_price = '$price' WHERE  book_id = '$bid'";

   if (mysqli_query($conn,$query)) {
   	
   	     header("location:index.php");
   } else
   {
   	echo "error";
   }
   mysqli_close($conn);

?>