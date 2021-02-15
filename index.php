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
    <title>Selfiana Lestari UTS Project V FANS IND</title>

    <!-- CSS dan JS DataTable-->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

    <body id="page-top">

    <!-- Untuk Memulai Kapan Akan Tampil Sebagai Ukuran Handphone Atau Tablet -->
    <nav class= "navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
      <div class="container-fluid">
      <a class="navbar-brand font-weight-bold text-white" >V FANS INDONESIA</a>
      <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" 
      data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Untuk Mendefinisikan Bagian Header Menu Navigation-->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="index.php">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="formregister.php">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contactus.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="edit.php">EDIT PROFILE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about.php">ABOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Untuk Membuat Suatu Elemen Dengan Ukuran Yang Cukup Besar Lalu Diwarnai Dengan Background Abu - Abu -->
    <div class="jumbotron">
      <!-- Untuk Membuat Tampilan Layout Tidak Penuh -->
      <div class="container"><br><br>
              <h1 class="display-4"><span class="font-weight-bold" >HAVE FUN WITH KIM TAEHYUNG</span></h1>
              <p>Aplikasi fanbase Kim Tae Hyung. Jika ingin bergabung, silahkan pilih menu sign up.</p>
                  <h6 class="text-right">Watch Video With V<h6>
                  <a class="btn btn-primary btn-lg" href="video/winterbear.webm" role="button">Winter Bear</a>
                </div>
          </div>

   <!-- Awal Card -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="cold-md-3 mr-4">
          <div class="card" style="width: 18rem;">
            <img src="img/tetet.jpg" class="card-img-top" alt="Gambar">
            <div class="card-body">
              <h6 class="card-title text-info">Kim Tae Hyung</h6>
              <h6 class="card-text"><a href="biodata.php" class="text-primary">#1 - Kim Tae Hyung - Biodata</a></h6>
            </div>
          </div>
        </div>
        <div class="cold-md-3 mr-4">
          <div class="card" style="width: 18rem;">
            <img src="img/tetet.jpg" class="card-img-top" alt="Gambar">
            <div class="card-body">
              <h6 class="card-title text-info">Kim Tae Hyung</h6>
              <h6 class="card-text"><a href="diskografi.php" class="text-primary">#2 - Kim Tae Hyung - Diskografi</a></h6>
            </div>
          </div>
        </div>
        <div class="cold-md-3 ">
          <div class="card" style="width: 18rem;">
            <img src="img/tetet.jpg" class="card-img-top" alt="Gambar">
            <div class="card-body">
              <h6 class="card-title text-info">Kim Tae Hyung</h6>
              <h6 class="card-text"><a href="filmografi.php" class="text-primary">#3 - Kim Tae Hyung - Filmografi</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div> <br>
    <!-- Akhir Card -->
  
    <!-- Awal Footer -->
    <div class="container-fluid">
    <div class="row" style="background: #66a3ff; ">
      <div class="col-md-12">
          <p>@Copyright by 18111093_SelfianaLestari_TIFRP18CNSA</p>
      </div>
    </div>
    </div>
    <!-- Akhir Footer -->
</body>