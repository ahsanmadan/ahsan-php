<?php

//include koneksi database
include 'config/koneksi.php';

//get data dari form
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelamin = $_POST['kelamin'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO siswa_muda (nisn, nama_siswa, jurusan, jenis_kelamin, no_hp, alamat) 
VALUES ('$nisn', '$nama', '$jurusan', '$kelamin','$nohp', '$alamat') ";

if ($connection->query($query)) {
    header("location: ../siswa-view.php");
} else {
    echo "<script>
    alert('Data gagal disimpan')
    </script>";
}
