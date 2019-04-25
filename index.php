<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curd app</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
  <?php
   //add connection 
    include('dbConnection.php');

    $query    = "SELECT * FROM book_info";
    $result   = mysqli_query($conn,$query);
  ?>

    <div class="container bg-secondary" style="padding-top: 20px; padding-bottom: 20px;">
    	<h2>Php mysql and curd</h2>
   <div class="row">
   	<div class="col-sm-4">

   	 <form action="insert.php" method="post">
    	<div class="form-group">
    		<label for="">Book Title</label>
    		<input class="form-control" type="text" name="bookt" placeholder="Enter book title">
    	</div>
    	 <div class="form-group">
    		<label for="">Book Author</label>
    		<input class="form-control" type="text" name="booka" placeholder="Enter book price">
    	</div>

    	 <div class="form-group">
    		<label for="">Book Price</label>
    		<input class="form-control" type="text" name="bookp" placeholder="Enter book price">
    	</div>
    	<button class="btn btn-info btn-block" type="submit">Add books</button>
    </form>	
    
   	</div>
   	 <div class="col-sm-8">
   	<table class="table">
   		<thead>
   			<tr>
   				<th>Book title</th>
   				<th>Book price</th>
   				<th>Book author</th>
   				<th>Curd action</th>
   			</tr>
   		</thead>
   		<tbody>
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
          
          
      ?>
   			<tr>
   				<td><?php echo $row['book_title'];?></td>
   				<td><?php echo $row['book_author'];?></td>
   				<td><?php echo $row['book_price'];?></td>
   				<td>
   					<a class="btn btn-success" href="edit.php?id=<?php echo $row['book_id'];?>">Edit</a>
   					<a class="btn btn-danger" href="delete.php?id=<?php echo $row['book_id'];?>">Delete</a>
   				</td>
   			</tr>
        <?php
      }
          mysqli_close($conn); 
        ?>
   		</tbody>
   	</table>
   </div>
   </div>
    </div> 


	<script src="jquery-slim.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>
