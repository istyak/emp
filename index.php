<?php
include "connection.php";
?>

<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="/emp.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Emp Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="emp name" placeholder="Enter Name" name="email">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Basic Salary</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bs" placeholder="Enter Basic Salary" name="email">
      </div>
    </div>
	
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Hours Rant</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="hr" placeholder="Enter Hours Rant" name="email">
      </div>
    </div>
	
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Medical Allowance	</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ma" placeholder="Enter Medical Allowance" name="email">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Department</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dpt" placeholder="Enter Department" name="email">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Position</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pos" placeholder="Enter Position" name="email">
      </div>
    </div>
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Total Salary</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="ts" placeholder="Enter Total Salary" name="pwd">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Joining Date</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="jd" placeholder="Enter Joining Date" name="pwd">
      </div>
    </div>
	

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Insert</button>
		

        <button type="submit" class="btn btn-default">Update</button>
	

        <button type="submit" class="btn btn-default">Delete</button>
		
  </form>
</div>

</body>

</body>
</html>

<?php
if(isset($_POST["insert"]))
	
{ 
  mysqli_query($link,"insert into table values(NULL,'','','','','',''));
}
?>