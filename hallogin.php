<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PerpusKita</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div class="container">
		<div class="content">
			<h1 class="title">Selamat Datang</h1>
			<hr>
			<form action="halpinjam.php" method="POST">
			<table style="font-size: 24px;">
				<tr>
					<td>User ID</td>
					<td>:</td>
					<td><input type="password" name="uid" id="uid"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="login" value="Log In">
					</td>
					<td>
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</div>
	</div>
</body>
</html>