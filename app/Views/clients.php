<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<title>Practice Pharmasan 2!</title>
        <?php require 'partials/header.php' ?>
	</head>
	<body>
		<h1>Clients!</h1>
        <div class="container">
			<a href="<?php echo base_url('/create') ?>" class="btn btn-success">Add Client</a>
			<br/>
			<table class="table table-light" id="clients">
				<thead class="thead-light">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Id Document</th>
						<th>Email</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($clients as $client): ?>
						<tr>
							<td><?= $client['id'] ?></td>
							<td><?= $client['name'] ?></td>
							<td><?= $client['id_document'] ?></td>
							<td><?= $client['email'] ?></td>
							<td><?= $client['address'] ?></td>
							<td><a href="<?= base_url('/update/'.$client['id']) ?>" class="btn btn-info" type="button">Update</a> | <a href="<?= base_url('/delete/'.$client['id']) ?>" class="btn btn-danger" type="button">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
            <script>
            $(document).ready(function() {
                $('#clients').DataTable({
                    "scrollX": true,
                    deferRender:    true,
                    scrollY:        400,
                    scrollCollapse: true,
                    scroller:       true,
                    dom: 'Bfrtip',
                    buttons: [
                        'csv'
                    ],
                    pageLength : 5,
                    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
                });
            });
        </script>
		</div>
	</body>
</html>
