<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//input data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama', '$nim', '$alamat')");
//return ke halaman awal
header("location: ./index.php");

