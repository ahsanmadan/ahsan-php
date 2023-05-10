<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body style="background-color: #edecee;">
    <!-- navbar -->
    <?php include "templates/navbar.php" ?>
    <!-- end navbar -->

    <!-- bagian konten -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12 my-3">
                <div class="card shadow">
                    <h5 class="card-header">Tambah data siswa</h5>
                    <div class="card-body">
                        <h5 class="card-title">Data siswa SMK MUDA</h5>
                        <p class="card-text">isi data siswa dengan benar</p>

                        <!-- form tambah siswa -->
                        <form action="simpan-data.php" method="post">
                            <div class="mb-3">
                                <label for="nisn" class="form-table">NISN</label>
                                <input type="text" name="nisn" class="form-control" placeholder="NISN Siswa">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-table">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-table">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan Siswa">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin" class="form-table">Jenis Kelamin</label>
                                <input type="text" name="kelamin" class="form-control" placeholder="L / P">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-table">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Simpan Data">
                        </form>
                        <!-- end form tambah siswa -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end konten -->
</body>

</html>