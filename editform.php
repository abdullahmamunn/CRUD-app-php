<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editform</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


    <div class="container bg-dark text-light" style="padding-top: 20px;padding-bottom: 20px;">
    <h2 class="text-center">Eidt form</h2>
    <div class="form-group">
      <form action="">
         <input type="hidden" name="id" value="">
        <div>

            <label for="">Book title</label>
      	    <input class="form-control" type="text" name="bookt" value="" >
        </div>
        <div>
        	<label for="">Book author</label>
      	    <input class="form-control" type="text" name="booka" value="" >
        </div>
         <div>
        	<label for="">Book price</label>
      	    <input class="form-control" type="text" name="bookp" value="" >
        </div>
          <button class="btn btn-success form-control">Save</button>	
      </form>
          </div>	
    </div>
	<script src="jquery-slim.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>
