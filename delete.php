<?php
    //include file config.php
    include('config.php');

    //jika benar mendapatkan GET id dari URL
    if(isset($_GET['id'])){
        //membuat variabel $id yang menyimpan nilai dari $_GET['id]
        $id = $_GET['id'];

        //melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
        $cek = mysqli_query($koneksi, "SELECT FROM data_pendaftar WHERE id='$id'") or die(mysqli_error($koneksi));

        //jika query menhasilkan nilai > 0 maka eksekusi script dibawah
        if(mysqli_num_rows($cek) > 0){
            //query ke database DELETE untuk menghapus data dengan kondisi id=$id
            $del = mysqli_query($koneksi, "SELECT * FROM data_pendaftar WHERE id=$id") or die(mysqli_error($koneksi));
            if($del){
                echo '<script>alert("Berhasil Mengahapus Data."); document.location="tampil.php";</script>';
            }else{
                echo '<script>alert("Gagal Mengahapus Data."); document.location="tampil.php";</script>';
                }
            }else{
                echo '<script>alert("Id Tidak Ditemukan Di Database."); document.location="tampil.php";</script>';
                }
            }else{
                echo '<script>alert("Id Tidak Ditemukan Di Database."); document.location="tampil.php";</script>';
    }
?>