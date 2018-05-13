<?php 
include "koneksi.php";
$cari = $_GET['cari'];
$query = mysqli_query($koneksi,"select * from pegawai where nama ='$cari'");				
?>
<html>
<body>
<table border = "1">
	<tr>
	 <th>Nama</th>
	 <th>NIP</th>
	 <th>Tanggal Lahir</th>
	 <th>Divisi</th>
	 <th>Edit</th>
	 <th>Delete</th>
	</tr>
	<?php
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
	 <td><?php echo $data['nama']?></td>
	 <td><?php echo $data['nip']?></td>
	 <td><?php echo $data['tgl_lahir']?></td>
	 <td><?php echo $data['divisi']?></td>
	 <td><a href="edit.php?nomor=<?php echo $data['nomor'];?>">Edit</a></td>
	 <td><a href="delete.php?nomor=<?php echo $data['nomor'];?>">Delete</a></td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>