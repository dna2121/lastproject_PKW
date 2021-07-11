<?php

include 'config.php';

$id = $_GET['id'];
$infobuku = mysqli_query($koneksi, "select * from infobuku where id='$id'");
while ($data = mysqli_fetch_assoc($infobuku)) {
?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <title><?php echo $data['nama'] ?></title>
  </head>

  <body onload="window.print();">
    <div class="container mt-5">
        <p class="fw-bold">STRUK BUKU</p>
        <p>no.invoice: <?php echo $data['id'] ?></p>
        <p>Nama Buku : <?php echo $data['namabuku'] ?></p>
        <p>Kategori Buku : <?php echo $data['kategori'] ?></p>
        <p>Penerbit Buku : <?php echo $data['penerbit'] ?></p>
        <p>Harga Buku : <?php echo $data['harga'] ?></p>
        <p>Diskon 10%</p>
        <p>Total Harga : <?php echo $data['diskon'] ?></p>
    </div>
    <?php
}
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
}
