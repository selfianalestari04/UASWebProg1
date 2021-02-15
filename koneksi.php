<?php

class Database {
 var $db_host = 'localhost';
 var $db_user = 'root';
 var $db_pass = '';
 var $db_name = 'tb_login';
 var $con = '';

 public function __construct() {
  $this->con = mysqli_connect($this->id_anggota, $this->username, $this->password);

  if(mysqli_connect_errno()) {
   echo "Koneksi gagal : " . mysqli_connect_error();
  }
 }