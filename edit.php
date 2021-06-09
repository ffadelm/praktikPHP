<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- edit start -->
    <?php
    //memanggil file config.php
    include 'config.php';
    //menangkap id yang di kirimkan melalui button detail
    $id = $_GET['id'];
    //melakukan quey untuk mendapatkan data mahasiswa berdasarkan $id
    $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id='$id'");
    while ($data = mysqli_fetch_assoc($mahasiswa)) {
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a>/ Edit Mahasiswa / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Edit Profil Mahasiswa</p>
                </div>
                <div class="card-body fw-bold">
                    <!-- membuat form dengan method post untuk memanggil file update.php -->
                    <form method="post" action="update.php">
                        <!-- input yang disembunyikan (hidden) untuk menyimpan id mahasiswa -->
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <!-- input nim -->
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama" value="<?php echo $data['nama']; ?>">
                        </div>
                        <!-- input nim -->
                        <div class="mb-3">
                            <label for="NIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Anda" name="nim" value="<?php echo $data['nim']; ?>">
                        </div>
                        <!-- input alamat -->
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat Anda" name="alamat" value="<?php echo $data['alamat']; ?>">
                        </div>
                        <!-- Button update data  -->
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- edit end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>