<?php

include('config/koneksi.php');

//get id
$nisn = $_GET['id'];

$query = "DELETE FROM siswa_muda WHERE nisn = '$nisn'";

if ($connection->query($query)) {
    echo "<script>
alert('Data Siswa Berhasil dihapus')
window.location = 'tampil-siswa.php';
</script>";
} else {
    echo "DATA GAGAL DIHAPUS!";
}
