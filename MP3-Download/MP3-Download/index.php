<?php
include "koneksi.php";
?>
<html>
<head>
	<link rel="stylesheet" href="gaya2.css">
</head>
<body>
	<div id="container">
	<div id="header"><br>
		<a href="index.php"><img width="400"align="left" height="80" alt="" src="image/logo.jpg"></a>
	</div>
	<link rel="stylesheet" href="navbar.css">
		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li class="right active"><a href="login.php">Login</a></li>
		</ul>
	</div><br>
	<div>
		<form action="index.php" method="get" class="cari">
			<input type="text" name="cari">
			<input type="submit" value="Cari">
		</form>
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
