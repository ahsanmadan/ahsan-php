<?php

//include koneksi database
include '../../config/koneksi.php';


//t
$module = $_GET['module'];
$act = $_GET['act'];

// tambah siswa
if ($module == 'pinjam' and $act == 'insert') {
    $id = date("dmyHis");
    $nisn = $_POST['nama'];
    $isbn = $_POST['judul'];
    $pinjam = date('Y-m-d');
    $balik = $_POST['tgl_balik'];
    $status = $_POST['status'];
    $query = "INSERT INTO siswa_peminjaman (id_peminjaman, nisn, isbn, tgl_pinjam, tgl_kembali, status) 
    VALUES ($id, '$nisn', '$isbn', '$pinjam', '$balik','$status') ";

    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Peminjaman berhasil disimpan</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        echo "<script>
    alert('Data gagal disimpan')
    </script>";
    }
} elseif ($module == 'pinjam' and $act == 'delete') {
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
} elseif ($module == 'pinjam' and $act == 'edit') {
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
