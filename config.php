<?php
//koneksi ke database. "" merupakan password phpmyadmin
$koneksi = mysqli_connect("localhost", "root", "", "infobuku");

//cek koneksi ke database
//apabila error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}