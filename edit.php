<?php include('config.php');

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
<center><font size="6">Edit Data Anggota</font></center>
<hr>

<?php
//jika sudah mendapatkan parameter GET id dari URL
if(isset($_GET['id_anggota'])){
    //membuat variabel $id untuk menyimpan id dari GET id di URL
    $id = $_GET['id_anggota'];
    
    //query ke database SELECT tabel anggota pendaftar berdasarkan id = $id
    $select = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id_anggota'") or die(mysqli_error($koneksi));

    //jika hasil query = 0 maka muncul pesan error
    if(mysqli_num_rows($select) ==0){
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
    //jika hasil query > 0
    }else{
        //membuat variabel $data dan menyimpan data row dari query
        $data = mysqli_fetch_assoc($select);
    }
}

?>

<?php
//jika tombol simpan ditekan/diklik
if(isset($_POST['submit'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', username='$username',
    email='$email', password='$password' WHERE id_anggota='$id_anggota'") or die(mysqli_error($koneksi));

    if($sql){
        echo '<script>alert("Berhasil Menyimpan Data."); document.location="tampil.php";<script>';
    }else{
        echo '<div class="alert alert-warning">Gagal Melakukan Proses Edit Data.</div>';
    }
}
?>

<form action="edit.php?id_anggota=<?php echo $id_anggota; ?>" method="post">
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Id Anggota</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="id_anggota" class="form-control" size="4" value="<?php echo $data['id_anggota'];?>" readonly required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
    <div class="col-md-6 col-sm-6">
        <select name="jenis_kelamin" class="form-control" required>
        <option value="Laki-Laki" <?php if($data['jenis_kelamin'] == 'Laki-Laki'){echo 'selected';}?>>Laki - Laki</option>
        <option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan'){echo 'selected';}?>>Perempuan</option>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">No Hp</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="username" class="form-control" value="<?php echo $data['username'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>" required>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
    <div class="col-md-6 col-sm-6">
        <input type="text" name="password" class="form-control" value="<?php echo $data['password'];?>" required>
    </div>
</div>


</form>

</div>
</html>