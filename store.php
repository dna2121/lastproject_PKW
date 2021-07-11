<?php
// include koneksi database
include './config.php';

//menangkap data yang dikirim dari form
$namabuku = $_POST['namabuku'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$hargadiskon = (10/100)*$_POST['harga'];
$diskon = $_POST['harga']-$hargadiskon;


// menginput data ke database
mysqli_query($koneksi, "insert into infobuku values('', '$namabuku', '$kategori', '$penerbit', '$harga', '$diskon')");
//mengembalikan ke halaman awal
header("location:./indexadm.php");
