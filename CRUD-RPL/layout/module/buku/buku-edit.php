<?php
// query select data siswa
$id = $_GET['id'];
$query = "SELECT * FROM siswa_buku WHERE isbn = $id";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn)
?>

<div class="card">
    <div class="card-header">
        <h3>Edit data buku</h3>
    </div>
    <div class="card-body">
        <form action="module/buku/aksi.php?module=buku&act=edit&id=<?= $data['isbn']; ?>" method="post">
            <div class="mb-3">
                <label for="isbn" class="form-table">ISBN</label>
                <input readonly type="text" name="isbn" class="form-control" placeholder="ISBN Buku" value="<?= $data['isbn']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-table">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="<?= $data['judul_buku']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-table">Pengarang Buku</label>
                <input type="text" name="ngarang" class="form-control" placeholder="Pengarang Buku" value="<?= $data['pengarang']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-table">Penerbit Buku</label>
                <input type="text" name="nerbit" class="form-control" placeholder="Penerbit Buku" value="<?= $data['penerbit']; ?>">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-table">Tahun Terbit</label>
                <input type="text" name="tater" class="form-control" placeholder="Tahun Terbit" value="<?= $data['tahun_terbit']; ?>">
            </div>
            <div class=" mb-3">
                <label for="alamat" class="form-table">Jenis Buku</label>
                <input type="text" name="jenis" class="form-control" placeholder="Jenis Buku" value="<?= $data['jenis_buku']; ?>">
            </div>
            <div class=" mb-3">
                <label for="alamat" class="form-table">Stok Buku</label>
                <input type="text" name="stok" class="form-control" placeholder="Stok Buku" value="<?= $data['stok']; ?>">
            </div>
            <div class=" modal-footer">
                <a type="button" href="?module=buku" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <input class="btn btn-purple" type="submit" value="Ubah">
            </div>
        </form>
    </div>
</div>