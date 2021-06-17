<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from mahasiswa where id ='$id'");

//mengalihkan halaman ke index.php
header("location: index.php");

?>