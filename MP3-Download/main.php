<?php
include "koneksi.php";
?>
<html>
<head>
	<link rel="stylesheet" href="gaya2.css">
</head>
<body>
	<div>
		<form action="pegawai.php" method="get" class="cari">
			<label>Cari :</label>
			<input type="text" name="cari">
			<input type="submit" value="Cari">
		</form>
		<a href="login.php"><button class="btn2">Login</button></a></br>
		<table border = "1">
			<tr>
				<th>Judul</th>
				<th>Penyanyi</th>
				<th>Genre</th>
				<th>Link</th>
			</tr>
			<?php 
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$query = mysqli_query($koneksi,"select * from lagu where judul like '%".$cari."%' OR penyanyi like '%".$cari."%'
				OR genre like '%".$cari."%'");				
			}else{
				$query = mysqli_query($koneksi,"select * from lagu");		
			}
			$no = 1;
			while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $data['judul']?></td>
				<td><?php echo $data['penyanyi']?></td>
				<td><?php echo $data['genre']?></td>
				<td><a href="<?php echo $data['link']?>">Download</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>
