<?php
include 'conn1.php';

$q = "SELECT * FROM student";
$query = mysqli_query($con, $q);
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
	<div class="container">
		<div class="col-lg-12">
			<br><br>
			<h1 class="text-warning text-center">Display Table Data</h1>
			<br>
			<table class="table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<th>id</th>
					<th>Name</th>
					<th>Semester</th>
					<th>Email</th>
					<th>Program</th>
					<th>Contact Number</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
	<?php
	include 'conn1.php';
	$q ="SELECT * FROM student";
	$query =mysqli_query($con, $q);
	while($r=mysqli_fetch_array($query)){
	
	?>
		<tr class="text-center">
			<td><?php echo $r["id"];?> </td>
			<td><?php echo $r["Name"];?> </td>
			<td><?php echo $r["Semester"];?> </td>
			<td><?php echo $r["Email"];?> </td>
			<td><?php echo $r["Program"];?> </td>
			<td><?php echo $r["Contact_Number"];?> </td>
			<td><button class="btn-danger btn "> <a href="delete1.php?id=<?php echo $r["id"]; ?>"class="text-white">Delete</a></button></td>
			<td><button class="btn-primary btn "> <a href="update1.php?id=<?php echo $r["id"]; ?>" class="text-white">Update</a></button></td>
		</tr>
		<?php
			}
		?>
			</table>
		</div>
	</div>

</body>
</html>