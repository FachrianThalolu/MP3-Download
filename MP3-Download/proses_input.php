<?php
include "koneksi.php";
$judul = $_POST['judul'];
$penyanyi = $_POST['penyanyi'];
$genre = $_POST['genre'];
$link = $_POST['link'];
$input = mysqli_query($koneksi, "INSERT INTO lagu (judul, penyanyi, genre, link) VALUES('$judul','$penyanyi','$genre','$link')");
if($input){
header("location:index2.php");
}
else{
header("location:check.php");
}
?>
