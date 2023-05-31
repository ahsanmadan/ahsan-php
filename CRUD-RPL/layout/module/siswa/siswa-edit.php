<?php
// query select data siswa
$nisn = $_GET['id'];
$query = "SELECT * FROM siswa_muda";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn)
?>

<div class="card">
    <div class="card-header">
        <h3>Edit data siswa</h3>
    </div>
    <div class="card-body">
        <form action="module/siswa/aksi.php?module=siswa&act=edit&id=<?= $data['nisn']; ?>" method="post">
            <div class="mb-3">
                <label for="nisn" class="form-table">NISN</label>
                <input readonly type="text" name="nisn" class="form-control" placeholder="NISN Siswa" value="<?= $data['nisn']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-table">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" value="<?= $data['nama_siswa']; ?>">
            </div>
            <div class=" mb-3">
                <label for="jurusan" class="form-table">Jurusan</label>
                <select name="jurusan" class="custom-select" value="<?= $data['jurusan']; ?>">
                    <option value="<?= $data['jurusan'] ?>" selected><?= $data['jurusan'] ?></option>
                    <option value="TJKT">TJKT</option>
                    <option value="DKV">DKV</option>
                    <option value="PPLG">PPLG</option>
                    <option value="MPLB">MPLB</option>
                    <option value="AKL">AKL</option>
                    <option value="Pemasaran">Pemasaran</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kelamin" class="form-table">Jenis Kelamin</label>
                <select name="kelamin" class="custom-select">
                    <?php if ($data['jenis_kelamin'] == "Laki-laki") : ?>
                        <option selected value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    <?php elseif ($data['jenis_kelamin'] == "Perempuan") : ?>
                        <option selected value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-table">Nomor Handphone</label>
                <input type="text" name="nohp" class="form-control" placeholder="08123456789" value="<?= $data['no_hp']; ?>">
            </div>
            <div class=" mb-3">
                <label for="alamat" class="form-table">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa" value="<?= $data['alamat']; ?>">
            </div>
            <div class=" modal-footer">
                <a type="button" href="?module=siswa" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <input class="btn btn-purple" type="submit" value="Ubah">
            </div>
        </form>
    </div>
</div>