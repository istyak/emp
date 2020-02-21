<?php
include "connection.php"
?>

<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-4">
  <h2>Employee Entry from form</h2>
  <form class="form-horizontal" action="" name="from1" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Last Name  </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" placeholder="Enter Last name" name="lastname">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email  </label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="lastname" placeholder="Enter Email" name="email">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact  </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
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
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
		<button type="submit" name="update" class="btn btn-default">Update</button>
		<button type="submit" name="delete" class="btn btn-default">Delete</button>
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
	  <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Contact</th>
		<th>Eedit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>



	<?php
	

	$query = "SELECT * FROM user";
	
	$res = mysqli_query($con,$query);
	
	while($row = mysqli_fetch_array($res)){ 
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["firstname"]; echo "</td>";
		echo "<td>"; echo $row["lastname"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["contact"]; echo "</td>";
echo "<td>"; ?> <a href="edit.php? id=<?php echo $row ["id"]; ?> <button type="button" class="btn btn-success">Edit<button> </a> <?php echo "</td>";
echo "<td>"; ?> <a href="delete.php? id=<?php echo $row ["id"]; ?> <button type="button" class="btn btn-danger">Delete<button></a> <?php echo "</td>";
	
		echo "</tr>";
}
	
	?>	
	</tbody>
	</thead>	
  </table>
</div>
</body>


<?php
if(isset($_POST["update"])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
 // mysqli_query($con,"insert into user (firstname,lastname) VALUES('$firstname','$lastname')");
   mysqli_query($con, "UPDATE user SET email='y'  WHERE firstname = '$firstname'");
}
?>

//insert code
<?php
if(isset($_POST["insert"])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
     mysqli_query($con,"insert into user (firstname,lastname,email,contact) VALUES('$firstname','$lastname','$email','$contact')");
}
?>

//insert code
<?php
if(isset($_POST["search"])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
     mysqli_query($con,"select * from user1 where firstname='$firstname'");
}
?>

///
//<script type="text/javascript">
//window.location.href=window.location.href;
//</script>
//// 
<?php
if(isset($_POST["delete"])){
	$firstname = $_POST['firstname'];
     mysqli_query($con,"delete from user where firstname='$firstname'");
}
?>

<?php
{
	$lastname = $_POST['lastname'];
     mysqli_query($con,"select * from user where lastname='tt'");
}
?>

//<script type="text/javascript">
//window.location.href=window.location.href;
//</script>

</html>
