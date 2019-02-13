<?php
include 'conn1.php';
if(isset($_POST["submit"]))
{
	$id=$_GET["id"];
	$name=$_POST["name"];
	$semester=$_POST["semester"];
	$email=$_POST["email"];
	$program=$_POST["program"];
	$contact=$_POST["contact"];

	$q="UPDATE student set id=$id, Name='$name', Semester='$semester', Email='$email', Program='$program', Contact_Number='$contact' WHERE id = $id ";
	$query =mysqli_query($con, $q);
	header('location:display1.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<br><br>
	
		<div class="card-header bg-dark">
		<h1 class="text-white text-center">Form Submittion</h1>
		</div>
		<form method="POST">

			<br><div class="card">

			<label>Name:</label>
			<input type="text" name="name" class="form-control"><br>

			<label>Semester:</label>
			<input type="text" name="semester" class="form-control"><br>

			<label>Email:</label>
			<input type="text" name="email" class="form-control"><br>

			<label>Program:</label>
			<input type="text" name="program" class="form-control"><br>

			<label>Contact Number:</label>
			<input type="numeric" name="contact" class="form-control"><br>
			<button class="btn btn-success btn-md" type="submit" name="submit" value="submit">Submit</button>
			<button class="btn btn-default btn-md" type="cancel" name="cancel" value="cancel">Cancel</button>
		</div>
		</form>
	
</div>

</body>
</html>