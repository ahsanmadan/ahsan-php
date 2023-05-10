<?php

//include koneksi database
include 'config/koneksi.php';

//get data dari form
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO siswa_muda (nisn, nama_siswa, jurusan,jenis_kelamin,alamat)
 VALUES ('$nisn', '$nama', '$jurusan', $kelamin', '$alamat') ";

if ($connection->query($query)) {
    header("location: tambah.php");
} else {
    echo "<p>Data gagal Disimpan!`</p>";
}
