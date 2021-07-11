<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Toko Buku Bahagia</title>
  </head>

  <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFB6B9;">
            <div class="container">
                <a class="navbar-brand" href="#">Data Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNovAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        
                    </div>
                </div>
            </div>
        </nav>

        <?php
        //memanggil file config.php
        include 'config.php';
        //menangkap id yang dikirim melalui button detail di index.php
        $id = $_GET['id'];
        //melakukan query untuk mendapatkan data buku berdasarkan id
        $infobuku = mysqli_query($koneksi, "select * from infobuku where id = '$id'");
        while ($data = mysqli_fetch_assoc($infobuku)){
        ?>
            <div  class="container mt-5">
                <p ><a href="index.php">Home</a> / Detail Buku / <?php echo $data['namabuku'] ?></p>
                <div class="card">
                    <div style="background-color: #FAE3D9;" class="card-header">
                        <p class="fw-bold">Info Buku</p>
                    </div>
                    <div class="card-body fw-bold">
                        <p>Nama Buku : <?php echo $data['namabuku'] ?></p>
                        <p>Kategori Buku : <?php echo $data['kategori'] ?></p>
                        <p>Penerbit : <?php echo $data['penerbit'] ?></p>
                        <p>Harga : <?php echo $data['harga'] ?></p>
                        <p> </p>
                        <p>>> DISKON 10% <<</p>
                        <p>Harga setelah diskon : <?php echo $data['diskon'] ?></p>
                        <a style="background-color: #61C0BF;"  href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Cetak</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>