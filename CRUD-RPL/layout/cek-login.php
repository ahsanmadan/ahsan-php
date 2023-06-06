<?php
include "config/koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM siswa_user WHERE username = '$username'";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn);

$pass = password_verify($password, $data['password']);

if (mysqli_num_rows($conn) > 0) {
    // cek pw
    if ($password = $pass) {
        session_start();
        $_SESSION['namaUser'] = $data['nama_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        header("location:media.php?module=home");
    } else {
        // pw salah
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-danger' role='alert'>Kata sandi tidak sesuai</div>";
        header("location: index.php");
    }
} else {
    session_start();
    $_SESSION["alert"] = "<div class='alert alert-danger' role='alert'>Nama Pengguna tidak ditemukan</div>";
    header("location: index.php");
}
