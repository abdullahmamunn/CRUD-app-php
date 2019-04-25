<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editform</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 
 <?php
 include('dbConnection.php');

  $id = $_GET['id'];
  $query = "SELECT * FROM book_info WHERE book_id = $id";
  $result = mysqli_query($conn,$query);
?>

    <div class="container bg-dark text-light" style="padding-top: 20px;padding-bottom: 20px;">
    <h2 class="text-center">Eidt form</h2>

    <div class="form-group">
      <form role="form" action="update.php" method="get">
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
        	
      ?>
         <input type="hidden" name="bookid" value="<?php echo $row['book_id'];?>">
        <div>

            <label>Book title</label>
      	    <input class="form-control" type="text" name="bookt" value="<?php echo $row['book_title'];?>" >
        </div>
        <div>
        	<label for="">Book author</label>
      	    <input class="form-control" type="text" name="booka" value="<?php echo $row['book_author'];?>" >
        </div>
         <div>
        	<label for="">Book price</label>
      	    <input class="form-control" type="text" name="bookp" value="<?php echo $row['book_price'];?>" >
        </div>
          <button class="btn btn-success form-control" type="submit">Save</button>
          <?php
              }
              mysqli_close($conn);
          ?>	
      </form>
          </div>	
    </div>
	<script src="jquery-slim.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>
