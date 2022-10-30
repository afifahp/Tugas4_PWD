<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profil</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<hr>
			<?php
			$name = $_POST['name'];
			?>
			<h1 class="title">Halo <?php echo $name?>!!</h1>
			<ul>
				<li><a href="hallogin.php">Log Out</a></li>
			</ul>
		</div>
		<div class="content">
			<h2 class="title">Profil Pengguna</h2>
			<p style="font-size : 20px">
				Nama : <?php echo $name?><br>
				ID   : 
			</p>
		</div>
		<div class="list">
			<form action="keranjang.php" method="POST">
			<table style="font-size : 16x">
				<tr>
					<th>No</th>
					<th>Judul Buku</th>
					<th>Penerbit</th>
					<th>Keterangan</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Buku 1</td>
					<td>Penerbit 1</td>
					<td><input type="checkbox" name="borrow" value="Buku 1" onclick="check()"></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Buku 2</td>
					<td>Penerbit 2</td>
					<td><input type="checkbox" name="borrow" value="Buku 2"onclick="check()"></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Buku 3</td>
					<td>Penerbit 3</td>
					<td><input type="checkbox" name="borrow" value="Buku 3"onclick="check()"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Pilih">
					</td>
					<td>
						<input type="reset" name="reset" value="Hapus">
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</body>
</html>