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
			<li class="nav-item ">
				<a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item active">
				<a class="nav-link " href="coming.php">Comming soon</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
			
		</ul>
		
	</div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel" style="height:90vh" >
	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<!-- The slideshow -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/grey.jpg" alt="Greyhound">
		</div>
		<div class="carousel-item">
			<img src="images/batman.jpg" alt="Dark knight">
		</div>
		<div class="carousel-item">
			<img src="images/hob2.jpg" alt="Hobbs and shaw">
		</div>
	</div>
	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
<section class="cards ">
	<div class="container-fluid ml-auto">
		<div class="row mx-1">
			<div class="card bg-dark col-lg-3 col-md-3 col-12 px-0 my-3 " style="width:300px">
				<img class="card-img-top" src="images/king.jpg" alt="Card image" height="485px">
				<div class="card-body">
					<h4 class="card-title text-white">The King's man</h4>
					<p class="card-text text-white">Gemma Arterton,Daniel Brühl,Aaron Taylor-Johnson</p>
					<div class="container-fluid mb-1">
						<div class="row">
							<div class="col-12 text-right mr-auto" >
								<form action="book.php" method="POST">
									<select name="movie" class="custom-select mb-1">
									<option value="The King's man" selected>The King's man</option>
								</select>
								<select name="screens" class="custom-select mb-1">
									<option selected>Screen Time</option>
									<option value="12:00">12:00</option>
									<option value="14:00">14:00</option>
									<option value="16:00">16:00</option>
								</select>

								<select name="seats" class="custom-select mb-1">
									<option selected>Seat Number</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								
					
					<button type="submit" name="submit" class="form-control btn btn-primary">Book My Show</button>
					</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card bg-dark my-3 px-0 col-lg-3 col-md-3 col-12  " style="width:300px ">
				<img class="card-img-top" src="images/no.jpg" alt="Card image"height ="485px">
				<div class="card-body">
					<h4 class="card-title text-white">No Time To Die</h4>
					<p class="card-text text-white">Ana de Armas,Daniel Craig,Lashana Lynch</p>
					<div class="container-fluid mb-1">
						<div class="row">
							<div class="col-12 text-right mr-auto" >
								<form action="book.php" method="POST">
									<select name="movie" class="custom-select mb-1">
									<option value="No Time To Die" selected>No Time To Die</option>
								</select>
								<select name="screens" class="custom-select mb-1">
									<option selected>Screen Time</option>
									<option value="12:00">12:00</option>
									<option value="14:00">14:00</option>
									<option value="16:00">16:00</option>
								</select>

								<select name="seats" class="custom-select mb-1">
									<option selected>Seat Number</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								
					
					<button type="submit" name="submit" class="form-control btn btn-primary">Book My Show</button>
					</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card bg-dark my-3 px-0 col-lg-3 col-md-3 col-12 " style="width:300px">
				<img class="card-img-top" src="images/free.jpg" alt="Card image" height="485px">
				<div class="card-body">
					<h4 class="card-title text-white">Free Guy</h4>
					<p class="card-text text-white">Ryan Reynolds,Taika Waititi,Jodie Comer</p>
					<br>
					<div class="container-fluid mb-1">
						<div class="row">
							<div class="col-12 text-right mr-auto" >
								<form action="book.php" method="POST">
									<select name="movie" class="custom-select mb-1">
									<option value="Free Guy" selected>Free Guy</option>
								</select>
								<select name="screens" class="custom-select mb-1">
									<option selected>Screen Time</option>
									<option value="12:00">12:00</option>
									<option value="14:00">14:00</option>
									<option value="16:00">16:00</option>
								</select>

								<select name="seats" class="custom-select mb-1">
									<option selected>Seat Number</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								
					
					<button type="submit" name="submit" class="form-control btn btn-primary">Book My Show</button>
					</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="card bg-dark my-3 px-0 col-lg-3 col-md-3 col-12" style="width:300px">
				<img class="card-img-top" src="images/mons.jpg" alt="Card image" height ="485px">
				<div class="card-body">
					<h4 class="card-title text-white">Monster Hunt</h4>
					<p class="card-text text-white">Edward Norton,Brad Pitt,Zach Grenier</p>
					<br>
					<div class="container-fluid mb-1">
						<div class="row">
							<div class="col-12 text-right mr-auto" >
								<form action="book.php" method="POST">
									<select name="movie" class="custom-select mb-1">
									<option value="Monster Hunt" selected>Monster Hunt</option>
								</select>
								<select name="screens" class="custom-select mb-1">
									<option selected>Screen Time</option>
									<option value="12:00">12:00</option>
									<option value="14:00">14:00</option>
									<option value="16:00">16:00</option>
								</select>

								<select name="seats" class="custom-select mb-1">
									<option selected>Seat Number</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								
					
					<button type="submit" name="submit" class="form-control btn btn-primary">Book My Show</button>
					</form>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>