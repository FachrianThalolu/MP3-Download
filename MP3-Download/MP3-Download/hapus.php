<?php 
include "koneksi.php";
$nomor = $_GET['nomor'];
$delete = mysqli_query($koneksi,"DELETE FROM lagu WHERE nomor='$nomor'");
if(delete){
header("location:index2.php");}
?>