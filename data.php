<?php

require_once "koneksi.php";

$sql = "SELECT * FROM nama_lengkap";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);
echo $jumlah;