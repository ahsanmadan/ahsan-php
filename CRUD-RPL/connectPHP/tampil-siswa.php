<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Student</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Spectral:wght@700&display=swap');
</style>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<body>
    <!-- navbar -->
    <?php include "templates/navbar.php" ?>
    <!-- end navbar -->

    <!-- bagian konten -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 my-3">
                <div class="card shadow">
                    <h5 class="card-header">Data siswa</h5>
                    <div class="p-4">
                        <div class="card-body">
                            <h5 class="card-title">Data siswa SMK MUDA</h5>
                            <a class="btn btn-dark my-3" href="tambah.php">Tambah Data Siswa</a>
                        </div>

                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nisn</th>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Gender</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <<?php
                                    include('config/koneksi.php');
                                    $no = 1;
                                    $query = mysqli_query($connection, "SELECT * FROM siswa_muda");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?> <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nisn'] ?></td>
                                    <td><?php echo $data['nama_siswa'] ?></td>
                                    <td><?php echo $data['jurusan'] ?></td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td class="text-center d-flex flex-row">
                                        <a href="edit-siswa.php?id=<?php echo $data['nisn'] ?>" class="btn btn-sm btn-dark me-3">EDIT</a>
                                        <a href="hapus-siswa.php?id=<?php echo $data['nisn'] ?>" class="btn btn-sm btn-danger">DELETE</a>
                                    </td>
                                    </tr>

                                <?php $no++;
                                    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end content -->
</body>

</html>