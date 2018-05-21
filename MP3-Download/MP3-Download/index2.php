<?php
include "koneksi.php";
?>
<html>
	<link rel="stylesheet" href="gaya2.css">
<body>
	<div id="container">
	<div id="header"><br>
		<a href="index2.php"><img width="400"align="left" height="80" alt="" src="image/logo.jpg"></a>
	</div>
	<link rel="stylesheet" href="navbar.css">
		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li class="right active"><a href="logout.php">Logout</a></li>
		</ul>
	</div><br>
	<form action="lagu.php" method="get" class="cari">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	<table border = "1">
		<tr>
			<th>Judul</th>
			<th>Penyanyi</th>
			<th>Genre</th>
			<th>link</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$query = mysqli_query($koneksi,"select * from lagu where judul like '%".$cari."%' OR penyanyi like '%".$cari."%'
			OR genre like '%".$cari."%' OR link like '%".$cari."%'");		
		}
		else if (isset($_POST['sort']))
		{
		$sort = $_POST['sort'];
			$query = mysqli_query($koneksi,"select * from lagu order by ".$sort."");
		}
		else{
			$query = mysqli_query($koneksi,"select * from lagu order by nomor");		
		}
		$no = 1;
		while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $data['judul']?></td>
			<td><?php echo $data['penyanyi']?></td>
			<td><?php echo $data['genre']?></td>
			<td><a href="<?php echo $data['link']?>">Download</a></td>
			<th><a href="edit.php?nomor=<?php echo $data['nomor'];?>">Edit</a></td>
			<th><a href="hapus.php?nomor=<?php echo $data['nomor'];?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
	</table>
		<br>
		<a href="tambah.php"><button class="btn">Tambah List Lagu</button></a></br>
	</body>
	</html>
