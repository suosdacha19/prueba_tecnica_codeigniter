<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<title>Practice Pharmasan 2!</title>
        <?php require 'partials/header.php' ?>
	</head>
	<body>
		<h1>Users!</h1>
		<div class="container">
			<a href="<?php echo base_url('/create') ?>" class="btn btn-success">Add User</a>
			<br/>
			<table class="table table-light">
				<thead class="thead-light">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Username</th>
						<th>Password</th>
						<th>Rol</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($users as $user): ?>
						<tr>
							<td><?= $user['id'] ?></td>
							<td><?= $user['name'] ?></td>
							<td><?= $user['user'] ?></td>
							<td><?= $user['pass'] ?></td>
							<td><?= $user['rol'] ?></td>
							<td><a href="<?= base_url('/update/'.$user['id']) ?>" class="btn btn-info" type="button">Update</a> | <a href="<?= base_url('/delete/'.$user['id']) ?>" class="btn btn-danger" type="button">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</body>
</html>
