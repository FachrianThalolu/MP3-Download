<?php
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, 
"SELECT * FROM user WHERE password='$password' AND username='$username'");

$rows = mysqli_num_rows($query);
if($rows == 1){
	$_SESSION['username'] = $username;
	header("location:index2.php");
}
else{
	header("location:login.php");
}
?>