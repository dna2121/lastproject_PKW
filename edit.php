<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Toko Buku</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #FFB6B9;">
            <div class="container">
                <a class="navbar-brand" href="#">Data Buku (Admin)</a>
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
        include 'config.php';
        $id = $_GET['id'];
        $infobuku = mysqli_query($koneksi, "select * from infobuku where id='$id'");

        while ($data = mysqli_fetch_assoc($infobuku)) {
        ?>
            <div class="container mt-5">
            <p><a href="indexadm.php">Home</a> / Detail Buku / <?php echo $data['namabuku'] ?></p>
                <div class="card">
                    <div style="background-color: #FAE3D9;" class="card-header">
                        <p class="fw-bold">Update Buku</p>
                    </div>
                    <div class="card-body fw-bold">
                        <form method="post" action="update.php">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="namabuku" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="namabuku" value="<?php echo $data['namabuku']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="<?php echo $data['kategori']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit Buku</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit Buku" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" value="<?php echo $data['harga']; ?>">
                            </div>
                            

                            <button style="background-color: #61C0BF;" type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>