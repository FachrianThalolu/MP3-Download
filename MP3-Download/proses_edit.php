<?php
include "koneksi.php";
$nomor = $_POST['nomor'];
$judul = $_POST['judul'];
$penyanyi = $_POST['penyanyi'];
$genre = $_POST['genre'];
$link = $_POST['link'];

$input = mysqli_query($koneksi, "UPDATE lagu SET
judul='$judul',penyanyi='$penyanyi',genre='$genre',link='$link' WHERE nomor = '$nomor'");
if(edit){
	header("location:lagu.php");
}
?>