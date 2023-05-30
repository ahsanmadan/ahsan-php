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
$query = "UPDATE siswa_muda SET nama_siswa = '$nama', jurusan = '$jurusan', jenis_kelamin ='$kelamin', alamat = '$alamat'
WHERE nisn = '$nisn'";

if ($connection->query($query)) {
    echo "<script>
        alert('Data Berhasil Di simpan');
        window.location = 't';
    </script>";
} else {
    echo "<p>Data gagal Disimpan!</p>";
}
