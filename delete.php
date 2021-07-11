<?php

include 'config.php';

$id = $_GET['id'];


mysqli_query($koneksi, "delete from infobuku where id='$id'");

header("location:indexadm.php");
