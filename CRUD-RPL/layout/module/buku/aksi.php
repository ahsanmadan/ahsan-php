<?php

//include koneksi database
include '../../config/koneksi.php';

//t
$module = $_GET['module'];
$act = $_GET['act'];

// tambah siswa
if ($module == 'buku' and $act == 'insert') {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $ngarang = $_POST['ngarang'];
    $nerbit = $_POST['nerbit'];
    $tater = $_POST['tater'];
    $jenis = $_POST['jenis'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO siswa_buku (isbn, judul_buku, pengarang, penerbit, tahun_terbit, jenis_buku, stok) 
    VALUES ('$isbn', '$judul', '$ngarang','$nerbit', '$tater' , '$jenis','$stok') ";

    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data siswa berhasil disimpan</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        echo "<script>
    alert('Data gagal disimpan')
    </script>";
    }
} elseif ($module == 'buku' and $act == 'delete') {
    $isbn = $_GET['id'];

    $query = "DELETE FROM siswa_buku WHERE isbn = '$isbn'";

    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Buku Berhasil dihapus</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-warning' role='alert'>Data Buku Gagal dihapus</div>";
        header("location: ../../media.php?module=" . $module);
    }
} elseif ($module == 'buku' and $act == 'edit') {
    $isbn = $_GET['id'];

    $judul = $_POST['judul'];
    $ngarang = $_POST['ngarang'];
    $nerbit = $_POST['nerbit'];
    $tater = $_POST['tater'];
    $jenis = $_POST['jenis'];
    $stok = $_POST['stok'];

    $query = "UPDATE siswa_buku SET 
                judul_buku = '$judul', 
                pengarang = '$ngarang', 
                penerbit ='$nerbit',
                tahun_terbit= '$tater', 
                jenis_buku = '$jenis', 
                stok = '$stok'
                WHERE isbn = '$isbn'";


    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Buku Berhasil di Edit</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-warning' role='alert'>Data buku gagal di Edit</div>";
        header("location: ../../media.php?module=" . $module);
    }
}
