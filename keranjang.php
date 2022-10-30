<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peminjaman</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div class="container">
		<form action="success.php" method="POST"></form>
		<div class="header">
			<hr>
			<h2 class="title">Konfirmasi</h2>
		</div>
		<div class="list">
			<?php
				$startdate = date("y/m/d");
				$borrow = $_POST['borrow'];
				isset($_POST['borrow']);
			?>
			<p>
				Tanggal Peminjaman : <?php echo $startdate?>
			</p>
			<table>
				<tr>
					<th>No</th>
					<th>Judul Buku</th>
					<th>Penerbit</th>
					<th>Keterangan</th>
				</tr>
			</table>
			<?php

				if ($_POST['borrow'] = 2) {
					$enddate = date_create('P2W');
					echo $borrow;
					echo $enddate;
				} else if ($_POST['borrow'] > 2){
					$enddate = date_create('P4W');
					echo $borrow;
				} else {
					$enddate = date_create('P1W');
				}
				?>
		</div>
	</div>
</body>
</html>