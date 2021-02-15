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
    <title>Diskografi V Kim Tae Hyung</title>

    <!-- CSS dan JS DataTable-->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

    <!-- Untuk Menampilkan Isi Dokumen PHP -->
    <body>

        <!-- Untuk Membuat Tampilan Layout Penuh-->
        <div class="container-fluid" >
            <nav class= "navbar navbar-expand-lg navbar-light "  id="mainNav" >
                <div class="container-fluid">
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
                    <a class="nav-link js-scroll-trigger" href="formregister.php">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contactus.php">CONTACT US</a>
                    </li>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="about.php">ABOUT</a>
                    </li>
                </ul>
                </div>
                </div>
            </nav>

        <!-- Untuk Membuat Baris (Baris Ke 1 Adalah Header) -->
        <div class="row" style="background: #66a3ff; ">
            <div class="col-md-12"><br>
            <h5 class="text-center">DISKOGRAFI KIM TAE HYUNG</h5><br>
        </div>
        </div> 
        <!-- End Baris Ke 1 -->

        <!-- Untuk Membuat Baris (Baris ke 2 Adalah Konten ke 1,2) -->
        <div class="row">
            <!-- Konten 1 -->
            <div class="col-md-4"><br>
                <img src="img/v 1.jpg" height="450px"  class="mx-auto d-block" ></br>
            </div>

            <!-- Konten 2 -->
            <div class="col-md-8"><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Penyanyi</th>
                        <th>Judul</th>
                        <th>Album</th>				
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>24 Februari 2014</td>
                        <td> V </td>
                        <td>95 Graduation With Park Jimin</td>
                        <td>Single Collaboration</td>
                    </tr>
                    <tr>
                        <td>20 Maret 2015</td>
                        <td> V </td>
                        <td>Someone Like You (Cover)</td>
                        <td>Single</td>
                    </tr>
                    <tr>
                        <td>20 Desember 2016</td>
                        <td> V </td>
                        <td>It’s Definitely You With Jin <br>  It’s Definitely You (Instrumental)</td>
                        <td>Single Collaboration <br> OST Hwarang Part 2</td>
                    </tr>
                    <tr>
                        <td>28 Juni 2017</td>
                        <td> V </td>
                        <td>4 O’Clock With RM</td>
                        <td>Single Collaboration</td>
                    </tr>
                    <tr>
                        <td>30 Januari 2019</td>
                        <td> V </td>
                        <td>Scenery</td>
                        <td>Single</td>
                    </tr>
                    <tr>
                        <td>9 Agustus 2019</td>
                        <td> V </td>
                        <td>Winter Bear</td>
                        <td>Single</td>
                    </tr>
                    <tr>
                        <td>13 Maret 2020</td>
                        <td> V </td>
                        <td>Itaewon Class OST Part 12 <br> Sweet Night (Instrumental)</td>
                        <td>Single</td>
                    </tr>
                </tbody>
            </table>
            </div>    
            </div>
        <!-- End Baris Ke 2 -->

        <!-- Baris Ke 3 Adalah Footer -->
        <div class="row" style="background: #66a3ff; ">
            <div class="col-md-12">
                <p>@Copyright by 18111093_SelfianaLestari_TIFRP18CNSA</p>
            </div>
        </div>
        <!-- End Baris 3 -->

        </div>
        <!-- Akhir container -->
        </body>
        </html>