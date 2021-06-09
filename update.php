<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//update data ke database
mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim = '$nim', alamat = '$alamat' where id = '$id'");
//return ke halaman awal
header("location: index.php");