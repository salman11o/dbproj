<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		Db Project
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index1.php"><b>Book My Show</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
				
			</nav>
			<br>
			<table class="table table-bordered table-hover table-bordered w-50 my-5 m-auto ">
				<thead class="thead-dark">
					<tr>
						<th>Email</th>
						<th>Booking_ID</th>
						<th>Ticket_ID</th>
						<th>Status</th>
						
					</tr>
				</thead>
				<?php
				$con=mysqli_connect('localhost','root','','dbproject');
				$query=mysqli_query($con,"select * from bookings join tickets on bookings.ticket_id=tickets.ticket_id");
				while($row=mysqli_fetch_array($query)){
				?>
				<tbody>
					<tr>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['booking_id']; ?></td>
						<td><?php echo $row['ticket_id']; ?></td>
						<td><?php echo $row['status']; ?></td>
						
					</tr>
				</tbody>
				<?php }?>
			</table>
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</body>
	</html>