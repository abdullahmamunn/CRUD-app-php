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

    <div class="container bg-light" style="padding-top: 20px; padding-bottom: 20px;">
    	<h2 style="text-align: center;">Php mysql and curd</h2>

        <div id="dismiss">
            <h3 id="saveData">
                <?php
                if (isset($_GET['msg']) && $_GET['msg'] == true){?>
                    <div class="alert alert-success">
                        <strong>Great!</strong>
                        <?php echo "Data Added Successfully!"; ?>
                    </div>
                <?php }?>
            </h3>
            <h3 id="deleteData">
                <?php
                if (isset($_GET['delete_msg'])){?>
                    <div class="alert alert-danger">
                        <strong>Great!</strong>
                        <?php echo "Data deleted Successfully!"; ?>
                    </div>
                <?php }?>
            </h3>
            <h3 id="updateData">
                <?php
                if (isset($_GET['update_msg'])){?>
                    <div class="alert alert-success">
                        <strong>Great!</strong>
                        <?php echo "Data updated Successfully!"; ?>
                    </div>
                <?php }?>
            </h3>
        </div>

   <div class="row">
   	<div class="col-sm-4">

   	 <form action="insert.php" method="post" id="formSubmit">
    	<div class="form-group">
    		<label class="col-form-label" for="">Book Title</label>
    		<input class="form-control" type="text" name="bookt" placeholder="Enter book title" id="bookName">
    	</div>
    	 <div class="form-group">
    		<label for="">Book Author</label>
    		<input class="form-control" type="text" name="booka" placeholder="Book Author" id="bookAuthor">
    	</div>

    	 <div class="form-group">
    		<label for="">Book Price</label>
    		<input class="form-control" type="text" name="bookp" placeholder="Book Price" id="bookPrice">
    	</div>
    	<button class="btn btn-info btn-block" id="submitBtn" type="submit">Add books</button>
     </form>
        <h3>
            <div style="color: red;" id="message"></div>
        </h3>


    </div>
   	 <div class="col-sm-8">
   	<table class="table">
   		<thead>
   			<tr>
   				<th>Book title</th>
                <th>Book author</th>
                <th>Book price</th>
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
   					<a class="btn btn-success" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
   					<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
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
  <script>

      document.getElementById('formSubmit').onsubmit = function () {
             var book_name = document.getElementById('bookName').value;
             var book_author = document.getElementById('bookAuthor').value;
             var book_price = document.getElementById('bookPrice').value;
             if (book_name=='' || book_author=='' || book_price=='')
             {
                 document.getElementById('message').innerHTML="Please fill the form";

                 return false;
             }
             else
             {
                 return true;
             }
      }
      document.getElementById('message').onclick = function () {
          document.getElementById('message').hidden = true;
      };

      function dismiss() {
         var save_document = document.getElementById('saveData');
         var delete_document = document.getElementById('deleteData');
         var update_data = document.getElementById('updateData');
      }
      document.getElementById('saveData').onclick = function () {
         document.getElementById('saveData').hidden = true;
      }
      document.getElementById('deleteData').onclick = function () {
          document.getElementById('deleteData').hidden = true;
      }
      document.getElementById('updateData').onclick = function () {
          document.getElementById('updateData').hidden = true;
      }



  </script>
</body>
</html>
