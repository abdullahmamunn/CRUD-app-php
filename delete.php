<?php
  include('dbConnection.php');
   $id = $_GET['id'];
  $query = "DELETE FROM book_info WHERE id='$id'";

            if (mysqli_query($conn,$query)) {
            	header("location:index.php?delete_msg=true");
            } else
            {
            	echo "error".mysqli_error($conn);
            }
     mysqli_close($conn);
            
?>       
