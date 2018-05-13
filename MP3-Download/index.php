<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="gaya.css">
</head>
<body>
	<h1>Welcome Admin</h1>
	<br>
	<a href="tambah.php"><button class="tambah">Tambah List Lahu</button></a></br>
	<a href="lagu.php"><button type="button" class="edit">Edit List Lagu</button></a></br>
	<a href="logout.php"><button type="button" class="out">Logout</button></a>
</body>
</html>
