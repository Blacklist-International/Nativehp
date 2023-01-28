<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

	<title>Main Page</title>
</head>

<body>
	<div class="container">
		<br />
		<table class="table table-dark table-hover" align="center">
			<tr>
				<th>ID</th>
				<th>Nama Pengunjung</th>
				<th>Aksi</th>
			</tr>
			<?php
			$datas = require_once('../Controller/Main.php');
			foreach ($datas as $data) :
			?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td>
						<a href="Update.php?id=<?php echo $data['id']; ?>" style="text-decoration: none; color: white"><i class="bi bi-pencil"></i></a>
						|
						<a href="../Controller/Delete.php?id=<?php echo $data['id']; ?>" style="text-decoration: none; color: white"><i class="bi bi-trash"></i></a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		<br />
		<a href="./Insert.php" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></a>
	</div>
</body>

</html>