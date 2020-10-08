<?php
  include('dbConnection.php');
  $title  = $_POST['bookt'];
  $author = $_POST['booka'];
  $price  = $_POST['bookp'];

  $query = "INSERT INTO book_info(book_title, book_author, book_price) VALUES ('$title','$author','$price ')";

            if (mysqli_query($conn,$query)) {
                $msg = "Data save successfully!";
            	header("location:index.php?msg=true");
            	return $msg;
            } else
            {
            	echo "error";
            }
     mysqli_close($conn);
            
?>       
