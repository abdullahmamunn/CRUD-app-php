<?php
  include('dbConnection.php');
  $title  = $_POST['bookt'];
  $author = $_POST['booka'];
  $price  = $_POST['bookp'];

  $query = "INSERT INTO book_info(book_title, book_author, book_price)
            VALUES ('$title','$author','$price ')";

            if (mysqli_query($conn,$query)) {
            	header("location:index.php");
            } else
            {
            	echo "error";
            }
     mysqli_close($conn);
            
?>       
