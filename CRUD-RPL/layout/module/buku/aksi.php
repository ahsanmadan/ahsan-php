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

    $query = "INSERT INTO siswa_muda (isbn, judul_buku, pengarang, penerbit, tahun_terbit, jenis_buku, stok) 
    VALUES ('$isbn', '$judul_buku', '$ngarang','$nerbit', '$tater' , '$jenis','$stok') ";

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
} elseif ($module == 'siswa' and $act == 'edit') {
    $nisn = $_GET['id'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelamin = $_POST['kelamin'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $query = "UPDATE siswa_muda SET nama_siswa = '$nama', jurusan = '$jurusan', jenis_kelamin ='$kelamin',no_hp = '$nohp', alamat = '$alamat'
    WHERE nisn = '$nisn'";


    if ($connection->query($query)) {
        echo "<script>
            alert('Data Siswa Berhasil diedit')
            window.location = '../../media.php?module=siswa';
            </script>";
    } else {
        echo "<script>
            alert('Data siswa gagal diedit')
            window.location = '../../media.php?module=siswa';
            </script>";
    }
}
