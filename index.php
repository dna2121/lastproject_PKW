<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
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
                        <a class="nav-link" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container data-mahasiswa mt-5">
            <!--Modal-->
            <!--Pastikan modal berada di dalam container-->
            <!--Button untuk  memunculkan modal-->
            
            <!-- Modal tambah data-->
            <div class="modal fade show" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--Kita membuat form dengan method post untuk memanggil file store.php-->
                        <form action="store.php" method="post" name="form">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahDataLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- input nama buku -->
                                <div class="mb-3">
                                    <label for="namabuku" class="form-label">Nama Buku</label>
                                    <input type="text" class="form-control" id="namabuku" placeholder="Masukkan Nama Buku" name="namabuku" required>
                                </div>

                                <!-- input kategori buku -->
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori Buku</label>
                                    <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" required>
                                </div>

                                <!-- input penerbit-->
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit Buku" name="penerbit" required>
                                </div>

                                <!--input harga-->
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required>
                                </div>

                                <div class="mb-3">
                                    <label for="diskon" class="form-label">>> DISKON 10% <<</label>
                                </div>
                                

                            </div>
                            <div class="modal-footer">
                                <!--button close modal-->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!--button tambah data pastikan berada di dalam form -->
                                <a type="submit" style="background-color: #61C0BF;" value="SIMPAN">Tambah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        

            <table class="table " id="tabelbuku">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Kategori Buku</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Harga</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    //memanggil config.phpyang sudah kita buat
                    include 'config.php';
                    //membuat var untuk nomor mhs yang akan diincrement
                    $no = 1;
                    //melakukan query
                    $infobuku = mysqli_query($koneksi, "select * from infobuku");
                    //looping data mahasiswa
                    while ($data = mysqli_fetch_array($infobuku)) {
                    ?>
                        <!--menampilkan data mahasiswa ke dalam table-->
                        <tr>
                            <!--increment nomor baris $no++ -->
                            <td><?php echo $no++; ?></td>
                            <!--menampilkan data-->
                            <td><?php echo $data['namabuku']; ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td> 
                            <td><p>Rp. <?php echo $data['harga']; ?> </p></td>
                            
                            <td>
                                <a style="background-color: #61C0BF;"  href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">Detail</a>
                            </td>
                        
                        </tr>
                <?php
                }
                ?>
            </tbody>
            </table>            
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabelbuku').DataTable();
            });
        </script>
    </body>
</html>