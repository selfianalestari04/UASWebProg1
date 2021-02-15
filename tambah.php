<?php include('config.php');?>

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
<center><font size="6">Tambah Data Anggota</font></center>
<hr>
<?php
    if(isset($_POST['submit'])){
        $id_anggota = $_POST['id_anggota'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin '];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $cek = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id'") or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) ==0) {
        $sql = mysqli_query($koneksi, "INSERT INTO tb_anggota(id_anggota, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_hp, username, email, password) VALUES 
        '$id_anggota','$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$username', '$email, '$password' ) ") or die (mysqli_error($koneksi));
        if($sql){
            echo '<script>alert("Berhasil Menambahkan Data."); document.location="tampil.php";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal Melakukan Proses Tambah Data.</div>';
        }
        }else{
            echo '<div class="alert alert-warning">Gagal, ID Sudah Terdaftar.</div>';
        }
    }
?>

<form action="tambah.php" method="post">
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Id Anggota</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="id_anggota" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="nama_lengkap" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="tempat_lahir" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="tanggal_lahir" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
    <div class="col-md-6 col-sm-6">
        <select name="jenis_kelamin" class="form-control" required>
        <option value="0">Pilih Jenis Kelamin</option>
        <option value="1">Laki - Laki</option>
        <option value="2">Perempuan</option>
        </select>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="alamat" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">No HP</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="no_hp" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="username" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="email" class="form-control" size="4" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="password" class="form-control" size="4" required>
    </div>
</div>

<div class="col-md-6 col-sm-6 offset-md-3">
    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
</div>

</form>
</div>
</html>
