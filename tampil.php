<?php

//memasukkan file config.php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS (Untuk Menghubungkan CSS Bootstrap Dengan File PHP)-->
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- Untuk Memasukkan Style (CSS) Dalam File Dengan PHP -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Untuk Menghubungkan w3schools Dengan File PHP -->
    <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        
    <!-- Judul Untuk Menjelaskan Isi Halaman Secara Keseluruhan-->
    <title>Contact Us V Fans Id</title>

    <!-- CSS dan JS DataTable-->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

    <div class="container-fluid" style="margin-top:20px">
    <center><font size="6">Data Anggota</font></center>
    <hr>
    <a href="tambah.php"><button class="btn btn-dark right ">Tambah Data Anggota</button></a>
    <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th>No.</th>
                <th>Id Anggota</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No.Hp</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //query ke database SELECT tabel pendaftar urut berdasarkan id yang paling besar
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_anggota ORDER BY id_anggota ASC") or die(mysqli_error($koneksi));
            //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if ..
            if (mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                //melakukan perulangan while dengan data data query $sql
                while($data = mysqli_fetch_assoc($sql)){
                    //menampilkan data perulangan 
                    echo'
                    <tr>
                        <td>'.$no.'</td>
                        <td>'.$data['id_anggota'].'</td>
                        <td>'.$data['nama_lengkap'].'</td>
                        <td>'.$data['tempat_lahir'].'</td>
                        <td>'.$data['tanggal_lahir'].'</td>
                        <td>'.$data['jenis_kelamin'].'</td>
                        <td>'.$data['alamat'].'</td>
                        <td>'.$data['no_hp'].'</td>
                        <td>'.$data['username'].'</td>
                        <td>'.$data['email'].'</td>
                        <td>'.$data['password'].'</td>
                        <td>
                            <a href="edit.php?id='.$data['id_anggota'].'"class=btn btn-secondary btn-sm">Edit</a>
                            <a href="delete.php?id='.$data['id_anggota'].'"class=btn btn-danger btn-sm" onClick="return confirm(\'Yakin Ingin Menghapus Data Ini ?\')">Delete</a>
                        </td>
                    </tr>
                    ';
                    $no++;
                }
            //jika query menghasilkan nilai 0
            }else{
                echo '
                <tr>
                    <td colspan="6">Tidak Ada Data.</td>
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
</html>