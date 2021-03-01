<?php
   session_start();
   require_once ("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $q = $database_connection->prepare("SELECT * FROM data_pendaftar WHERE username = ?");
   $q->execute(array($username));
   $finish = $q->fetch();
   if($q->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! 
     <a href='../login.php'>Back</a></div>";
   } else {
     if($password <> $finish['password']) {
      echo "<div align='center'>Password Yang Anda Masukan Salah! 
      <a href='../login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:../content.php');
     }
   }
?>