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
		<h1>Update!</h1>
		<div class="container col-md-5">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Edit User</h5>
					<p class="card-text">
						<form method="post" action="<?= base_url('/edit') ?>">
                            <?php if(session('page_name') === 'users'){ ?>
                                <input id="name" type="text" name="id" value="<?= $user['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" value="<?= $user['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input id="user" class="form-control" type="text" name="user" value="<?= $user['user'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" class="form-control" type="text" name="pass" required>
                                </div>
                                <label>Rol</label>
                                <select class="form-select" name="rol">
                                    <option <?php echo ($user['rol'] == 'administrator') ? 'selected' : '' ?> value="administrator">Administrator</option>
                                    <option <?php echo ($user['rol'] == 'seller') ? 'selected' : '' ?> value="seller">Seller</option>
                                </select>
                            <?php }else{ ?>
                                <input id="name" type="text" name="id" value="<?= $client['id'] ?>" hidden>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" value="<?= $client['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="id_document">Id Document</label>
                                    <input id="id_document" class="form-control" type="text" name="id_document" value="<?= $client['id_document'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" value="<?= $client['email'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Username</label>
                                    <input id="address" class="form-control" type="text" name="address" value="<?= $client['address'] ?>">
                                </div>
                            <?php } ?>
                            <button class="btn btn-success mt-2" type="submit">Update</button>
                            <a href="<?= base_url('/'.session('page_name'))?>" class="btn btn-info mt-2">Cancel</a>
						</form>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>
