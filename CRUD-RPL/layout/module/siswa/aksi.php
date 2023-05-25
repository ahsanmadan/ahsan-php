<?php

//include koneksi database
include '../../config/koneksi.php';

//t
$module = $_GET['module'];
$act = $_GET['act'];

// tambah siswa
if ($module == 'siswa' and $act == 'insert') {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelamin = $_POST['kelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa_muda (nisn, nama_siswa, jurusan, jenis_kelamin, no_hp, alamat) 
    VALUES ('$nisn', '$nama', '$jurusan', '$kelamin','$nohp', '$alamat') ";

    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data siswa berhasil disimpan</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        echo "<script>
    alert('Data gagal disimpan')
    </script>";
    }
} elseif ($module == 'siswa' and $act == 'delete') {
    $nisn = $_GET['id'];

    $query = "DELETE FROM siswa_muda WHERE nisn = '$nisn'";

    if ($connection->query($query)) {
        echo "<script>
            alert('Data Siswa Berhasil dihapus')
            window.location = '../../media.php?module=siswa';
            </script>";
    } else {
        echo "<script>
            alert('Data siswa gagal dihapus')
            window.location = '../../media.php?module=siswa';
            </script>";
    }
}
