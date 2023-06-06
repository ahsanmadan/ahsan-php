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
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Siswa Berhasil dihapus</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-warning' role='alert'>Data Siswa Gagal dihapus</div>";
        header("location: ../../media.php?module=" . $module);
    }
} elseif ($module == 'siswa' and $act == 'edit') {
    $nisn = $_GET['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelamin = $_POST['kelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $query = "UPDATE siswa_muda SET nama_siswa = '$nama', 
                jurusan = '$jurusan', 
                jenis_kelamin ='$kelamin',
                no_hp = '$nohp', 
                alamat = '$alamat'
                WHERE nisn = '$nisn'";


    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Siswa Berhasil diedit</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-warning' role='alert'>Data Siswa Gagal diedit</div>";
        header("location: ../../media.php?module=" . $module);
    }
}
