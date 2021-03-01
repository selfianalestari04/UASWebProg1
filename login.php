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

    <!-- Untuk Menghubungkan Fontawesome Dengan File HTML-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <!-- Untuk Memasukkan Style (CSS) Dalam File Dengan PHP -->
    <link rel="stylesheet" type="text/css" href="login.css">

    <!-- Untuk Menghubungkan w3schools Dengan File PHP -->
    <link rel="stylesheet" href="https://www.w3schools.com/colors/colors_picker.asp">
        
    <!-- Judul Untuk Menjelaskan Isi Halaman Secara Keseluruhan-->
    <title>Form Login V FANS IND</title>

    <!-- CSS dan JS DataTable-->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

    <!-- Untuk Menampilkan Isi Dokumen PHP -->
    <body background="img/v 1.jpg">
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
              <a class="nav-link js-scroll-trigger text-white"  href="index.php">HOME</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger text-white" href="login.php">LOGIN<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="contactus.php">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="about.php">ABOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br>

    <!-- Untuk Membuat Tampilan Layout Tidak Penuh-->
    <div class="container">
      <h4 class="text-center">FORM LOGIN</h4>
      <hr>
       
      <!-- Untuk Memproses Data Yang Akan Dikirim -->
      <form action="config/login.php" method="POST">
        <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
        <div class="form-group">
          <label>Username</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
          </div>
        </div>

        <!-- Untuk Memisahkan Masing - Masing Form Dan Membuat Label Untuk Masing - Masing Form -->
        <div class="form-group">
          <label>Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
          </div><br>
        </div>

        <div class="container-fluid">
          <!-- Untuk Membuat Button Submit-->
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <!-- Untuk Membuat Button Reset-->
        <button type="reset" class="btn btn-danger" >RESET</button>
      </form>
      </div>
        <div class="signup_link" >
            Not a member? <a href="formregister.php">Sign Up</a>
        </div>
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