<?php 
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query( $koneksi, "select * from user where username='$username' and password= '$password'");
$cek = mysqli_num_rows($login);

if($cek == 1){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:utama.php");
}else{
	header("location:index.php?pesan=gagal");
}

?>