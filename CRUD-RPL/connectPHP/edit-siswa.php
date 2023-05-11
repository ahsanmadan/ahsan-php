<?php

include('config/koneksi.php');

$nisn = $_GET['id'];

$query = "SELECT * FROM siswa_muda WHERE nisn = $nisn";

$conn = mysqli_query($connection, $query);

$data = mysqli_fetch_array($conn);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Edit Siswa</title>
</head>

<body>
    <?php include "templates/navbar.php" ?>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="aksi-edit-siswa.php" method="POST">

                            <div class="form-group mb-3">
                                <label>NISN</label>
                                <input readonly type="text" name="nisn" value="<?= $data['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama" value="<?= $data['nama_siswa'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Jurusan Siswa</label>
                                <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" placeholder="Masukkan Jurusan Siswa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Jenis kelamin</label>
                                <input type="text" name="kelamin" value="<?= $data['jenis_kelamin'] ?>" placeholder="Masukkan Jenis Kelamin Siswa" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?= $data['alamat'] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>