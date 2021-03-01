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

    <!-- Untuk Menampilkan Isi Dokumen PHP -->
    <body background="img/v 5.jpg">

        <!-- Untuk Membuat Tampilan Layout Penuh-->
        <div class="container-fluid" >
            <nav class= "navbar navbar-expand-lg navbar-light "  id="mainNav" >
                <a class="navbar-brand font-weight-bold " >V FANS INDONESIA</a>
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
                <li class="nav-item active">
                    <a class="nav-link js-scroll-trigger" href="contactus.php">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="about.php">ABOUT</a>
                </li>
                </ul>
            </div>
        </div>
        </nav><br><br><br>

    <!-- Untuk Membuat Baris (Baris Ke 2 Adalah Konten 1, Full Layar -->
    <div class="container-fluid">
        <!-- Awal col 12 -->
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
        <div class="alert alert-success" role="alert">
        Apakah ada saran, pertanyaan, masukan, serta kritik atau menemukan di website ini ?
        </div>
            <form name="formsMasukan" action="daftar.php" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Masukkan Email Anda" name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama">
                </div>
                <div class="form-group">
                    <label for="Pesan">Pesan</label>
                    <textarea class="form-control" name="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>    
        </div>    
        </div>
        </div> <br>

        <script>
            function validateForm(){
                if (document.forms["formsMasukan"]["email"].value == ""){
                    alert("Harap Isi Email");
                    document.forms["formsMasukan"]["email"].focus();
                    return false;
                }
                else if (document.forms["formsMasukan"]["nama"].value == ""){
                    alert("Harap Isi Nama");
                    document.forms["formsMasukan"]["nama"].focus();
                    return false;
                }
                else if (document.forms["formsMasukan"]["pesan"].value == ""){
                    alert("Harap Isi Pesan");
                    document.forms["formsMasukan"]["pesan"].focus();
                    return false;
                }
                alert('Masukan Terkirim');
                document.write("Selamat Masukan Anda Telah Terkirim");
            }   
        </script>

        <!-- Awal Footer -->
        <div class="row" style="background: #66a3ff; ">
            <div class="col-md-12">
                <p>@Copyright by 18111093_SelfianaLestari_TIFRP18CNSA_UASWEB1</p>
            </div>
        </div>
        <!-- Akhir Footer -->
    </div>
    <!-- Akhir container -->
    </body>

</html>