<?php
include "connect.php"
?>


<!DOCTYPE html>
<html lang="en">
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
<div class="col-lg-4">
  <h2>Employee Entry Form</h2>
  <form class="form-horizontal" action="" name="frame1" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="en">Emp Name</label>
      <div class="col-sm-10">
		<input type="text" class="form-control" id="en" name="en" maxlength="10" placeholder="Enter Your Name" required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="bs">Basic Salary</label>
       <div class="col-sm-10">          
        <input type="number" oninvalid="alert('Must contain 6 or more characters');"  class="form-control" id="bs" maxlength="5"  placeholder="000" pattern=".{,6}" name="bs">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="hr">Hours Rent</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="hr" placeholder="Enter Your House Rent" name="hr">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="ma">Medical Allowance</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="ma" placeholder="Enter Your Medical Allowance" name="ma">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="dpt">Depertment</label>
      <div class="col-sm-10">   
        <input type="text" class="form-control" id="dpt" placeholder="Enter Your Depertment" name="dpt">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="pos">Position</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pos" placeholder="Enter Your Position" name="pos">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="ts">Totall Salary</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="ts" placeholder="Enter Your Totall Salary" name="ts">
      </div>
    </div>
	
	    <div class="form-group">
      <label class="control-label col-sm-2" for="date">Joining Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" placeholder="12/12/2000" name="date">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="insert" class="btn btn-success">Insert</button>
		<button type="submit" name="update" class="btn btn-default">Update</button>
		<button type="submit" name="delete" class="btn btn-danger">Delete</button>
		<button type="submit" name="search" class="btn btn-default">Search</button>
	
      </div>
    </div>
  </form>
  </div>
</div>

<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
	  
        <th>Emp Name</th>
        <th>Basic Salary</th>
        <th>Hours Rent</th>
		<th>Medical Allowance</th>
		<th>Depertment</th>
		<th>Position</th>
		<th>Totall Salary</th>
		<th>Joining Date</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>


	<?php
	$query = "SELECT * FROM user1";
	$res = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($res)){ 
		echo "<tr>";
		echo "<td>"; echo $row["en"]; echo "</td>";
		echo "<td>"; echo $row["bs"]; echo "</td>";
		echo "<td>"; echo $row["hr"]; echo "</td>";
		echo "<td>"; echo $row["ma"]; echo "</td>";
		echo "<td>"; echo $row["dpt"]; echo "</td>";
		echo "<td>"; echo $row["pos"]; echo "</td>";
		echo "<td>"; echo $row["ts"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		//<button type="submit" name="edit" class="btn btn-success">Edit</button>
		echo "<td>"; ?> <a href="edit.php? id=<?php echo $row["id"]; ?><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
		echo "<td>"; ?> <a href="delete.php? id=<?php echo $row["id"]; ?><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
		echo "<td>"; ?><a href="delete.php" class="btn btn-info" role="button">Link Button</a> <?php echo "</td>";
		echo "</tr>";                                          
		}
	?>	
	
</div>



</body>

<?php
if(isset($_POST["insert"])){
	$en = $_POST['en'];
	$bs = $_POST['bs'];
	$hr = $_POST['hr'];
	$ma = $_POST['ma'];
	$dpt = $_POST['dpt'];
	$pos = $_POST['pos'];
	$ts = $_POST['ts'];
	$date = $_POST['date'];
     mysqli_query($con,"insert into user1 (en,bs,hr,ma,dpt,pos,ts,date) VALUES('$en','$bs','$hr','$ma','$dpt','$pos','$ts','$date')");
}
?>

<?php
if(isset($_POST["update"])){
	$en = $_POST['en'];
	$bs = $_POST['bs'];
	$hr = $_POST['hr'];
	$ma = $_POST['ma'];
	$dpt = $_POST['dpt'];
	$pos = $_POST['pos'];
	$ts = $_POST['ts'];
	$date = $_POST['date'];
	 mysqli_query($con, "UPDATE user1 SET dpt='hello',pos='cool',hr='007'  WHERE en = '$en'");
     //mysqli_query($con,"insert into user1 (en,bs,hr,ma,dpt,pos,ts,date) VALUES('$en','$bs','$hr','$ma','$dpt','$pos','$ts','$date')");
}
?>

<?php
if(isset($_POST["search"])){
    $en = $_POST['en'];
	$bs = $_POST['bs'];
     mysqli_query($con,"select * from user1 where en ='$en'");
}
?>

<?php
if(isset($_POST["delete"])){
	$en = $_POST['en'];
	$hr = $_POST['hr'];
     mysqli_query($con,"delete from user1 where en='$en'");
}
?>

//<script type="text/javascript">
//window.location.href=window.location.href;
//</script>


</html>
