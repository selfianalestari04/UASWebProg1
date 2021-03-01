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
    <link rel="stylesheet" type="text/css" href="register.css">

    <!-- Untuk Menghubungkan w3schools Dengan File PHP -->
    <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        
    <!-- Judul Untuk Menjelaskan Isi Halaman Secara Keseluruhan-->
    <title>Form Register V FANS IND</title>

    <!-- CSS dan JS DataTable-->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

    <!-- Untuk Menampilkan Isi Dokumen PHP -->
    <body background="img/v 4.jpg" >

    <!-- Untuk Membuat Tampilan Layout Penuh-->
    <div class="container-fluid">
    <nav class= "navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
    <a class="navbar-brand font-weight-bold text-white" >V FANS INDONESIA</a>
    <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" 
    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        <!-- Untuk Mendefinisikan Bagian Header Menu Navigation-->
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contactus.php">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about.php">ABOUT</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Untuk Membuat Tampilan Layout Penuh -->
    <div class="container">
        <h4 class="text-center">FORM REGISTRASI</h4>
        <hr>

        <!-- Untuk Memproses Data Yang Akan Dikirim -->
        <form action="config/register.php" method="POST">
            <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
            <div class="from-group">
                <label for="NamaLengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
            </div>
            
            <!-- Untuk Membuat Baris -->
            <div class="row">
                <!-- Untuk Membuat Kolom Tempat Lahir -->
                <div class="col-md-6">
                    <div class="from-group">
                    <label for="TempatLahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                </div>
                </div>

                <!-- Untuk Membuat Kolom Tanggal Lahir-->
                <div class="col-md-6">
                <div class="from-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                </div>
            </div>

            <!-- Untuk Memilih Jenis Kelamin -->
            <div class="from-grup">
                <label for="Jenis Kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="0">Pilih Jenis Kelamin</option>
                    <option value="1">Laki - Laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>

            <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
            <div class="from-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" >
            </div>
            
            <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
            <div class="from-group">
                <label for="Hp">No HP</label>
                <input type="number" name="no_hp" class="form-control" placeholder="Masukkan No HP Anda" > 
            </div>

            <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
            <div class="from-group">
                <label for="Alamat">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" >
            </div>

            <!-- Untuk Membuat Baris -->
            <div class="row">
                <!-- Untuk Membuat Kolom Email -->
                <div class="col-md-6">
                <div class="from-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan E-mail Anda" >
                </div>
                </div>
                
                <!-- Untuk Membuat Kolom Password -->
                <div class="col-md-6">
                <div class="from-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" > </br>
                </div>
                </div>  
            </div>
            
            <div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <!-- Untuk Membuat Button Reset-->
            <button type="reset" class="btn btn-danger">RESET</button>
            </div><br>
        </form>
    </div>



    <!-- Awal Footer -->
    <div class="container-fluid" style="background: #66a3ff; ">
        <div class="col-md-12">
            <p>@Copyright by 18111093_SelfianaLestari_TIFRP18CNSA_UASWEB1</p>
        </div>
    </div>
    <!-- Akhir Footer -->

    </body>
    </html>
    