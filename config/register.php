<?php
require_once "koneksi.php";
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// $nama_depan = $_POST["namadepan"];
// $nama_belakang= $_POST["namabelakang"];
// $email= $_POST["email"];
// $username= $_POST["username"];
// $password= $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `data_pendaftar` (`nama_lengkap`, `tempat_lahir`, `tanggal_lahir`,
 `jenis_kelamin`, `alamat`, `no_hp`, `username`, `email`, `password`) VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', 
 '$jenis_kelamin', '$alamat', '$no_hp', '$username', '$email','$password');");
$q->execute([$nama_lengkap, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_hp, $username, $email,$password]);
header("Location: ../login.php");
?>

