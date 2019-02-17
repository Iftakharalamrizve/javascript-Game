<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="rock text-center">
					<button class="btn btn-success" onclick="myFunction(1)">
						<i class="fa fa-hand-rock-o" aria-hidden="true"></i>
					</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="scissor text-center">
					<button class="btn btn-info" onclick="myFunction(2)">
						<i class="fa fa-scissors" aria-hidden="true"></i>
					</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="paper text-center">
					<button class="btn btn-warning" onclick="myFunction(3)"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4 text-center">
				<h3 class="text-center">You</h3>
			</div>
			<div class="col-md-4 text-center">
				<h3 class="text-center">Result</h3>
			</div>
			<div class="col-md-4 ">
				<h3 class="text-center">He</h3>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="rock text-center">
					<button class="btn btn-success"><i id="you"  aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="rock text-center">
					<h3 id="result"></h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="rock text-center">
					<button class="btn btn-success"><i id="he"  aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>