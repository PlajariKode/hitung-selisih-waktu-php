<?php

$selisih = 'Pilih tanggal terlebih dahulu';

if (isset($_POST['submit'])) {
	$date1 = date_create($_POST['date1']);
	$date2 = date_create($_POST['date2']);

	$diff = date_diff($date1, $date2);

	$selisih = $diff->format('Selisih %R%a hari');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menghitung selisih waktu dengan PHP</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-5 text-center">
		<h1>Menghitung selisih waktu dengan PHP</h1>

		<div class="card mt-5">
			<div class="card-body mx-auto">
				<form class="form-inline" method="post" action="">
					<label for="date1">DateTime1&nbsp;</label>
					<input type="date" name="date1" id="date1" class="form-control mr-2" required>
					<label for="date2">DateTime2&nbsp;</label>
					<input type="date" name="date2" id="date2" class="form-control mr-2" required>
					<button name="submit" type="submit" class="btn btn-primary">Hitung</button>
				</form>

				<br>

				<h2><?= $selisih ?></h2>
			</div>
		</div>
	</div>

</body>
</html>