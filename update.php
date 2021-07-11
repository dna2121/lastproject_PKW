<?php

include './config.php';

$id = $_POST['id'];
$namabuku = $_POST['namabuku'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$hargadiskon = (10/100)*$_POST['harga'];
$diskon = $_POST['harga']-$hargadiskon;


mysqli_query($koneksi, "update infobuku set namabuku ='$namabuku', kategori='$kategori', penerbit='$penerbit', harga='$harga', diskon='$diskon' where id='$id'");

header("location:indexadm.php");
