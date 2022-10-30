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
		<div class="content">
			<ul>
				
			</ul>
		</div>
		<div class="list">
			<table>
				<tr>
					<td>No</td>
					<td>Judul Buku</td>
					<td>Penerbit</td>
					<td>Keterangan</td>
				</tr>
				<tr>
					<?php
					$borrow = $_POST['borrow'];

						if (isset($_POST['borrow']) && $_POST['borrow'] == 'Pinjam'){
							echo $borrow;
						}
					?>
				
				</tr>
			</table>
		</div>
	</div>
</body>
</html>