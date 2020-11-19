
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php"><b>Book My Show</b></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link " href="coming.php">Comming soon</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="login.php">Login</a>
			</li>
			
		</ul>
		
	</div>
</nav>
<div class="jumbotron jumbotron-fluid " id="jum" style="height:150vh">
	<div class="container">
		<div class="row">
			<form action="log.php" class="was-validated w-50 m-auto " method="post">
				<div class="form-group">
					<h2 class="text-center">Login</h2>
					<br>
					<label for="email">Email address:</label>
					<input type="email" name="email" class="form-control border-success" placeholder="Enter email" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="pass" class="form-control" placeholder="Enter password" id="pwd">
				</div>
				
				<button type="submit" class="btn btn-success">Login</button>
			</form>

		</div>
	</div>
	

<div class="jumbotron jumbotron-fluid " id="jum" style="height:150vh">
	<div class="container">
		<div class="row">
			<form action="valid.php" class="was-validated w-50 m-auto " method="post">
				<div class="form-group">
					<h2 class="text-center">Registration</h2>
					<br>
					<label for="email">Email address:</label>
					<input type="email" name="email1" class="form-control border-success" placeholder="Enter email" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="pass1" class="form-control" placeholder="Enter password" id="pwd">
				</div>
				<div class="form-group">
					<label for="text">Username:</label>
					<input type="text" name="user" class="form-control border-success" placeholder="Enter Username" id="user">
				</div>
				<div class="form-group">
					<label for="number">Number:</label>
					<input type="number" name="no" class="form-control border-success" placeholder="Enter Phone No" id="No">
				</div>			
								<div class="form-group">
					<label for="text">Gender:</label>
								<select name="gender" class="custom-select ">
									<option selected>Gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
									
								</select>
				</div>
				
				<button type="submit"  name ="valid" class="btn btn-success">Register</button>
			</form>

		</div>
	</div>
</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
