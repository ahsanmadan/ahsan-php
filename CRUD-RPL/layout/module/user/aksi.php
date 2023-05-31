<?php

//include koneksi database
include '../../config/koneksi.php';

//t
$module = $_GET['module'];
$act = $_GET['act'];

if ($module == 'user' and $act == 'insert') {
    $nama = $_POST["namaUser"];
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $level = $_POST["level"];

    // hash pw
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO siswa_user(nama_user,username,password,level,is_active)
    VALUES ('$nama', '$username' , '$password', '$level' , '1')";

    if ($connection->query($query)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data user berhasil disimpan</div>";
        header("location: ../../media.php?module=" . $module);
    } else {
        echo "<script>
    alert('Data gagal disimpan')
    </script>";
    }
}
