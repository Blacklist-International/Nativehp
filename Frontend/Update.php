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

	<title>Update Page</title>
</head>
<?php

if (!isset($_GET['id'])) {
	echo "Nomor id tidak ditemukan";
	exit();
}

$data = require_once('../Controller/Detail.php');
?>

<body>
	<br />
	<div class="container">
		<form action="../Controller/Update.php" class="form-group" method="POST">
			<input type="text" name="id" id="id" class="form-control" style="background-color: wheat" value="<?php echo $data['id']; ?>" readonly>
			<br>
			<input type="text" name="nama" id="nama" class="form-control" style="background-color: wheat" value="<?php echo $data['nama']; ?>" />
			<br />
			<input type="submit" value="Update" class="btn btn-primary" />
		</form>
		<br />
		<a href="./Main.php" class="btn btn-danger">Kembali</a>
	</div>
</body>

</html>