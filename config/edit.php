<?php
require_once "koneksi.php";
    $id_register= $_POST["id_register"];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $email = $_POST['email'];

// $id_register= $_POST["id_reg"];
// $nama_depan = $_POST["namadepan"];
// $nama_belakang= $_POST["namabelakang"];
// $email= $_POST["email"];
// $username= $_POST["username"];

$q = $database_connection->prepare("UPDATE `data_pendaftar` SET `nama_lengkap` = ?, 
`tempat_lahir` = ?, `tanggal_lahir` =?, `jenis_kelamin` =?, `alamat` =?, `no_hp` =?, `username` =?,
`email` = ? WHERE `data_pendaftar`.`id` = ?");
$q->execute([$nama_lengkap, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat,
$no_hp, $username, $email, $id_register]);
header("Location: ../index.php");

?>