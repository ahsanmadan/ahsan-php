<script>
    function modalHapus() {
        $('#modalHapus').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    }
</script>
<div class="card">
    <div class="card-header">
        <h3>Data siswa</h3>
    </div>
    <div class="card-body">
        <?php
        session_start();
        if (!empty($_SESSION['alert'])) :
            echo $_SESSION["alert"];
        endif;
        session_destroy();
        ?>
        <a href="module/siswa/siswa-tambah.php" class="btn btn-purple" data-toggle="modal" data-target="#siswa-modal">Tambah data</a>
        <table class="table table-striped mt-3">
            <thead>
                <th>No.</th>
                <th>NISN</th>
                <th>Nama siswa</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                // query select data siswa
                $no = 1;
                $query = "SELECT * FROM siswa_muda";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {

                ?>
                    <!-- fetch data siswa -->
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nisn"]; ?></td>
                        <td><?= $data["nama_siswa"]; ?></td>
                        <td><?= $data["jurusan"]; ?></td>
                        <td><?= $data["jenis_kelamin"]; ?></td>
                        <td>
                            <a href="?module=siswa-edit&id=<?= $data['nisn']; ?>" class="btn btn-warning">Edit</a>
                            <a href="#" onclick="function modalHapus()" data-toggle="modal" data-target="#modalHapus<?php echo $no; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalHapus<?php echo $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/siswa/aksi.php?module=siswa&act=insert" method="post">
                    <div class="mb-3">
                        <label for="nisn" class="form-table">NISN</label>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-table">Jurusan</label>
                        <select name="jurusan" class="custom-select">
                            <option selected disabled>Choose..</option>
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
                            <option selected disabled>Choose..</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-table">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control" placeholder="08123456789">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-table">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-purple" value="Simpan Data">
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>