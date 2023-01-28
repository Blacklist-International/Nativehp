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

	<title>Insert Page</title>
</head>

<body>
	<br />
	<div class="container">
		<form action="../Controller/Insert.php" class="form-group" method="POST">
			<input type="text" name="nama" id="nama" class="form-control" style="background-color: wheat" placeholder="Nama Pengunjung" />
			<br />
			<input type="submit" value="Kirim" class="btn btn-primary" />
		</form>
		<br />
		<a href="./Main.php" class="btn btn-danger">Kembali</a>
	</div>
</body>

</html>