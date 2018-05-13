<?php
include "koneksi.php";
$nomor = $_GET['nomor'];
$query = mysqli_query($koneksi, "SELECT * FROM lagu WHERE nomor = '$nomor'");
$data = mysqli_fetch_assoc($query);
?>
<html>
<head>
	<link rel="stylesheet" href="gaya.css">
</head>
<body>
	<form action="proses_edit.php" method="post">
		<input value="<?=$data['nomor'];?>"type="hidden" name="nomor"><br>
		<input value="<?=$data['judul'];?>"type="text" name="judul"><br>
		<input value="<?=$data['penyanyi'];?>"type="text" name="penyanyi"><br>
		<input value="<?=$data['genre'];?>"type="text" name="genre"><br>
		<input value="<?=$data['link'];?>"type="text" name="link"><br>
		<input type = "submit" value="update">
	</form>
</body>
</html>
