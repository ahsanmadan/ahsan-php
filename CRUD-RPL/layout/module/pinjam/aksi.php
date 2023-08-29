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

    // query ambil data stok
    $query = "SELECT isbn,stok from siswa_buku WHERE isbn = $isbn";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    // masukkan jumlah stok ke variabel
    $stok = $row['stok'];
    // lakukan pengurangan stok
    $newStok = $stok - 1;

    // query insert peminjaman
    $query_pinjam = "INSERT INTO siswa_peminjaman (id_peminjaman, nisn, isbn, tgl_pinjam, tgl_kembali, status) 
    VALUES ($id, '$nisn', '$isbn', '$pinjam', '$balik','$status') ";

    // query update stok 
    $query_stok = "UPDATE siswa_buku SET stok = $newStok WHERE isbn = '$isbn'";

    if ($connection->query($query_pinjam)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Peminjaman berhasil disimpan</div>";

        // jalankan query update stok
        $connection->query($query_stok);

        header("location: ../../media.php?module=" . $module);
    } else {
        echo "<script>
    alert('Data gagal disimpan')
    </script>";
    }
} elseif ($module == 'pinjam' and $act == 'delete') {
    $id = $_GET['id'];
    $isbn = $_GET['isbn'];

    // query ambil data stok
    $query = "SELECT isbn,stok from siswa_buku WHERE isbn = $isbn";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    // masukkan jumlah stok ke variabel
    $stok = $row['stok'];
    // lakukan pengurangan stok
    $newStok = $stok + 1;

    $query_pinjam = "DELETE FROM siswa_peminjaman WHERE id_peminjaman = '$id'";

    $query_stok = "UPDATE siswa_buku SET stok = $newStok WHERE isbn = '$isbn'";

    if ($connection->query($query_pinjam)) {
        session_start();
        $_SESSION["alert"] = "<div class='alert alert-success' role='alert'>Data Siswa Berhasil dihapus</div>";

        // jalankan query update stok
        $connection->query($query_stok);

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
