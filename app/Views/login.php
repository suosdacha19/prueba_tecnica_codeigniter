<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<title>Practice Pharmasan 2!</title>
	</head>
	<body>
		<div class="container position-absolute top-50 start-50 translate-middle">
			<form class="form-control" action="<?php echo base_url('/login') ?>" method="POST">
				<div class="m-4">
				<h1>Login Pharmasan</h1>
				<div class="mb-3">
					<label for="user" class="form-label">Username</label>
					<input type="user" class="form-control" id="user" name="user">
				</div>
				<div class="mb-3">
					<label for="pass" class="form-label">Password</label>
					<input type="password" class="form-control" id="pass" name="pass">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
		
	</body>
</html>